<?php
declare(strict_types=1);

namespace App\Services;

use App\Enums\HttpRequestMethod;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\ArrayShape;
use JsonException;
use PHPUnit\Logging\Exception;

class AmoAuthService
{
    private string $clientId;
    private string $clientSecret;
    private string $redirectUrl;
    private string $accountUrl;
    public string $grantType;
    public ?array $fields = null;
    private string $tokensPath = 'tokens.json';


    public function __construct(string $grantType = 'access_token')
    {
        $this->clientId = env('AMO_CRM_CLIENT_ID');
        $this->clientSecret = env('AMO_CRM_SECRET');
        $this->redirectUrl = env('AMO_CRM_REDIRECT_URL');
        $this->accountUrl = ACCOUNT_URL;
        $this->grantType = $grantType;
    }

    /**
     * @return string
     */
    public function getGrantType(): string
    {
        return $this->grantType;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * @return string
     */
    public function getAccountUrl(): string
    {
        return $this->accountUrl;
    }

    function getData(): array
    {
        $data = [
            'client_id' =>  $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => env('AMO_CRM_REDIRECT_URL'),
        ];
        if ($this->fields) $data = array_merge($data, $this->fields);
        if($this->grantType) $data['grant_type'] = $this->grantType;
        return $data;
    }
    function addField(string $key, string $value): void {
        if($this->fields) $this->fields[$key] = $value;
        else $this->fields = [$key => $value];
    }

    /**
     * @throws \JsonException
     */
    function sendRequest(string $relUrl, HttpRequestMethod $method = HttpRequestMethod::GET): array
    {
        $data = $this->getData();
        $url = 'https://' . $this->accountUrl . '/' . $relUrl;
        $http = match ($method) {
            HttpRequestMethod::POST => Http::post($url, $data),
            HttpRequestMethod::GET => Http::get($url, $data),
            HttpRequestMethod::PUT => Http::put($url, $data),
            HttpRequestMethod::DELETE => Http::delete($url, $data),
            HttpRequestMethod::PATCH => Http::patch($url, $data),
        };
        $json = $http->json();
        if(!is_array($json)) throw new \JsonException('cant decode json');
        return $json;
    }

    /**
     * @throws \JsonException
     */
    function saveTokens(array $data): void
    {
        if(isset($data['message'])) throw new Exception('error: '. $data['message']);
        $json = json_encode([
            'refresh_token' => $data['refresh_token'],
            'access_token' => $data['access_token'],
            'expires' => $data['expires_in']
        ]);
        if (!$json) throw new \JsonException('cant encode json');
        Storage::put('tokens.json', $json);
    }

    /**
     * @throws JsonException
     * @throws \Exception
     */
    #[ArrayShape(['refresh_token' => "string", 'access_token' => "string", 'expires' => 'string'])] function getTokens(): array
    {
        $data = Storage::json($this->tokensPath);
        if(!$data) throw new JsonException('cant read json tokens data');
        if(!isset($data['refresh_token']) || !isset($data['access_token'])) {
            throw new \Exception('cant get tokens from storage');
        }
        return [
            'refresh_token' => $data['refresh_token'],
            'access_token' => $data['access_token'],
            'expires' => $data['expires']
        ];
    }
}
