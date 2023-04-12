<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use AmoCRM\Client\AmoCRMApiClient;
use AmoCRM\Collections\LinksCollection;
use App\Enums\HttpRequestMethod;
use App\Models\Providers\AmoProvider;
use App\Services\AmoAuthService;
use Exception;
use Illuminate\Http\Request;
use League\OAuth2\Client\Token\AccessToken;

class AmoCrmController
{
    private AmoAuthService $authService;
    public function __construct()
    {
        $this->authService = new AmoAuthService();
    }

    /**
     * @throws \JsonException
     */
    function saveTokensByAuthCode(Request $request): string
    {
        $this->authService->grantType = 'authorization_code';
        $this->authService->addField('code', $request->input('code'));
        $httpResponse = $this->authService->sendRequest('oauth2/access_token', HttpRequestMethod::POST);
        $this->authService->saveTokens($httpResponse);
        return 'success';
    }

    function addLead(AmoProvider $provider, Request $request)
    {
        try {
            $data = $request->all();
            $products = new LinksCollection();
            $sum = 0;
            foreach ($data['products'] as $productData) {
                $product = $provider->getProductById((int)$productData['id']);
                $product->setQuantity($productData['quantity']);
                $products->add($product);
                $sum += $product->getPrice() * $product->getQuantity();
            }
            $sum =(int)$sum;
            $contact = $provider->addContact($data['name'], $data['phone'], $data['email'], $data['telegram']);
            $provider->addLeadWithLinks($products, $contact, $sum);
        }
        catch (Exception $exception) {
            return response()->setStatusCode(500)->json([
                'message' => $exception->getMessage()
            ]);
        }

    }

    /**
     * @throws \JsonException
     */
    private function getApiClient(): AmoCRMApiClient
    {
        $data = (new AmoAuthService())->getTokens();
        $data['baseDomain'] = ACCOUNT_URL;
        $apiClient = new AmoCRMApiClient(env('AMO_CRM_CLIENT_ID'), env('AMO_CRM_SECRET'),env('AMO_CRM_REDIRECT_URL'));
        $accessToken = new AccessToken($data);
        $apiClient->setAccessToken($accessToken);
        $apiClient->setAccountBaseDomain(ACCOUNT_URL);
        return $apiClient;
    }

//    /**
//     * @throws \JsonException
//     */
//    private function saveTokensByRefreshToken(string $refreshToken)
//    {
//        $this->authService->grantType = 'refresh_token';
//        $this->authService->addField('refresh_token', $refreshToken);
//        $httpResponse = $this->authService->sendRequest('oauth2/access_token', HttpRequestMethod::POST);
//        $this->authService->saveTokens($httpResponse);
//    }

}
