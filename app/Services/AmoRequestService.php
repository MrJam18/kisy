<?php
declare(strict_types=1);

namespace App\Services;

use App\Enums\HttpRequestMethod;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Storage;
use stdClass;

class AmoRequestService
{
    private string $accessToken;
    private HttpService $httpService;

    public function __construct()
    {
        $this->accessToken = Storage::json('tokens.json')['access_token'];
        $this->httpService = new HttpService(ACCOUNT_URL);
        $this->httpService->headers = [
            'Authorization' => $this->getBearerToken()
        ];
    }

    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    function send(string $relUrl, array $body = [], HttpRequestMethod $method = HttpRequestMethod::GET): array |stdClass
    {
        return $this->httpService->getJson($relUrl, $body, $method);
    }
    private function getBearerToken(): string
    {
        return 'Bearer ' . $this->accessToken;
    }
}
