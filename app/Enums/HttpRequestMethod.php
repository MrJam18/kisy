<?php
declare(strict_types=1);

namespace App\Enums;

use GuzzleHttp\Client;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

enum HttpRequestMethod
{
    case POST;
    case GET;
    case PUT;
    case DELETE;
    case PATCH;
}
