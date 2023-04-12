<?php

use App\Http\Controllers\AmoCrmController;
use App\Http\Middleware\Cors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(Cors::class)->post('/addDeal', [AmoCrmController::class, 'test']);
Route::post('addLead', [AmoCrmController::class, 'addLead',
]);
