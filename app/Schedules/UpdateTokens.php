<?php
declare(strict_types=1);

namespace App\Schedules;

use App\Enums\HttpRequestMethod;
use App\Services\AmoAuthService;
use Exception;
use Illuminate\Support\Facades\Log;

class UpdateTokens
{
    public function __invoke()
    {
        try {
            $authService = new AmoAuthService('refresh_token');
            $refreshToken = $authService->getTokens()['refresh_token'];
            $authService->addField('refresh_token', $refreshToken);
            $httpResponse = $authService->sendRequest('oauth2/access_token', HttpRequestMethod::POST);
            $authService->saveTokens($httpResponse);
            return $httpResponse['expiresIn'];
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
