<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use JsonException;
use League\OAuth2\Client\Token\AccessToken;

class TokensService extends AccessToken
{
     const TOKENS_PATH = 'tokens.json';
    /**
     * @throws JsonException
     * @throws \Exception
     */
    static function getTokensFromStorage(): self
    {
        $data = Storage::json(self::TOKENS_PATH);
        if(!$data) throw new JsonException('cant read json tokens data');
        if(!isset($data['refresh_token']) || !isset($data['access_token'])|| !isset($data['expires'])) {
            throw new \Exception('cant get tokens from storage');
        }
        return new self($data);
    }
}
