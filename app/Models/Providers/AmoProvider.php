<?php
declare(strict_types=1);

namespace App\Models\Providers;

use AmoCRM\Client\AmoCRMApiClient;
use AmoCRM\Collections\BaseApiCollection;
use AmoCRM\Collections\CustomFieldsValuesCollection;
use AmoCRM\Collections\LinksCollection;
use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Exceptions\AmoCRMMissedTokenException;
use AmoCRM\Exceptions\AmoCRMoAuthApiException;
use AmoCRM\Exceptions\InvalidArgumentException;
use AmoCRM\Exceptions\NotAvailableForActionException;
use AmoCRM\Models\BaseApiModel;
use AmoCRM\Models\CatalogElementModel;
use AmoCRM\Models\ContactModel;
use AmoCRM\Models\CustomFieldsValues\BaseCustomFieldValuesModel;
use AmoCRM\Models\CustomFieldsValues\ValueCollections\TextCustomFieldValueCollection;
use AmoCRM\Models\CustomFieldsValues\ValueModels\TextCustomFieldValueModel;
use AmoCRM\Models\LeadModel;
use App\Models\Product;
use App\Services\TokensService;
use Exception;
use function env;
use const ACCOUNT_URL;

class AmoProvider
{
    private AmoCRMApiClient $client;

    /**
     * @throws \JsonException
     */
    public function __construct()
    {
        $tokens = TokensService::getTokensFromStorage();
        $this->client = new AmoCRMApiClient(env('AMO_CRM_CLIENT_ID'), env('AMO_CRM_SECRET'),env('AMO_CRM_REDIRECT_URL'));
        $this->client->setAccessToken($tokens);
        $this->client->setAccountBaseDomain(ACCOUNT_URL);
    }

    /**
     * @throws AmoCRMApiException
     * @throws AmoCRMoAuthApiException
     * @throws AmoCRMMissedTokenException
     */
    function addContact(string $name, string $phone, string $email, string $telegram): ContactModel
    {
        $contact = new ContactModel();
        $contact->setName($name);
        $customFields = new CustomFieldsValuesCollection();
        $phoneModel = new BaseCustomFieldValuesModel();
        $phoneModel->setFieldId(680033);
        $this->setValue($phoneModel, $phone);
        $customFields->add($phoneModel);
        $emailModel = new BaseCustomFieldValuesModel();
        $emailModel->setFieldId(680035);
        $this->setValue($emailModel, $email);
        $customFields->add($emailModel);
        $telegramModel = new BaseCustomFieldValuesModel();
        $telegramModel->setFieldId(683269);
        $this->setValue($telegramModel, $telegram);
        $customFields->add($telegramModel);
        $contact->setCustomFieldsValues($customFields);
        return $this->client->contacts()->addOne($contact);
    }


    /**
     * @throws AmoCRMApiException
     * @throws AmoCRMoAuthApiException
     * @throws AmoCRMMissedTokenException
     */
    function addLeadWithLinks(LinksCollection $products, ContactModel $contact, int $sum): LeadModel
    {
        $links = $products;
        $lead = new LeadModel();
        $lead->setPrice($sum);
        $lead->setName($contact->getName());
        $this->client->leads()->addOne($lead);
        $links->add($contact);
        $this->client->leads()->link($lead, $links);
        return $lead;
    }

    /**
     * @throws NotAvailableForActionException
     * @throws AmoCRMMissedTokenException
     * @throws InvalidArgumentException
     */
    function getProducts(): \AmoCRM\Collections\CatalogElementsCollection
    {
        return $this->getProductsList()->get();
    }
    function getLeads(): ?\AmoCRM\Collections\Leads\LeadsCollection
    {
        return $this->client->leads()->get();
    }

    /**
     * @throws InvalidArgumentException
     * @throws AmoCRMApiException
     * @throws AmoCRMMissedTokenException
     * @throws AmoCRMoAuthApiException
     * @throws Exception
     */
    function getProductById(int $id): Product
    {
        $product = $this->getProductsList()->getOne($id);
        if (!$product) throw new Exception('cant find product by id ' . $id);
        return Product::cast($product);
    }

    /**
     * @throws InvalidArgumentException
     * @throws AmoCRMMissedTokenException
     */
    private function getProductsList(): \AmoCRM\EntitiesServices\CatalogElements
    {
        return $this->client->catalogElements(5107);
    }

    private function setValue(BaseCustomFieldValuesModel $model, string $value): void
    {
        $valueModel = new TextCustomFieldValueModel();
        $valueModel->setValue($value);
        $collection = new TextCustomFieldValueCollection();
        $collection->add($valueModel);
        $model->setValues($collection);
    }
}
