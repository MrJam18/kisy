<?php
declare(strict_types=1);

namespace App\Services;

use App\Enums\HttpRequestMethod;
use GuzzleHttp\Client;
use JsonException;
use stdClass;

class HttpService
{
    private Client $client;
    public ?array $headers = null;
    public function __construct(string $baseURL = '')
    {
        $this->client = new Client([
            'base_uri' => $baseURL
        ]);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws JsonException
     */
    function getJson(string $url, ?array $body = null, HttpRequestMethod $method = HttpRequestMethod::GET): array | stdClass
    {
        $requestData = [];
        if($body) $requestData['body'] = $body;
        if($this->headers) $requestData['headers'] = $this->headers;
        $json = json_decode($this->client->request($method->name, $url, $requestData)->getBody()->getContents());
        if(!$json) throw new JsonException("can't decode json");
        return $json;
    }
}
