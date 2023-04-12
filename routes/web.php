<?php

use App\Http\Controllers\AmoCrmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');
Route::get('amo-redirect', [AmoCrmController::class, 'saveTokensByAuthCode']);
Route::get('basket', function () {
    return view('basket');
})->name('basket');
Route::get('button', function () {
    return view('button');
});
//Route::get('test', [AmoCrmController::class, 'test']);
