<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\LeedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/send-leed', [LeedController::class, 'sendLeed'])->name('sendLeed');

Route::group([
    'middleware' => 'auth:sanctum',
], function ($router) {
    Route::resource('media', 'MediaAPIController');
    Route::resource('settings', 'SettingsAPIController')->only(['show', 'update']);
    Route::resource('locales', 'LocaleAPIController')->only(['index']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me'])->name('me');
});
