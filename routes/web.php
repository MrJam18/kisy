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

Route::view('/', 'main')->name('main');
Route::get('amo-redirect', [AmoCrmController::class, 'saveTokensByAuthCode']);
Route::get('basket', function () {
    return view('basket');
})->name('basket');
Route::get('button', function () {
    return view('button');
});
Route::view('confidential', 'rules.confidential')->name('confidential');
Route::view('user-agreement', 'rules.userAgreement')->name('user-agreement');
Route::view('public-offer', 'rules.offer')->name('public-offer');
Route::view('personal-data-processing', 'rules.personalDataProcessing')->name('personal-data-processing');
//Route::get('test', [AmoCrmController::class, 'test']);
