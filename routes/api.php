<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostalCodeConflictValidatorController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/postal-validator', [PostalCodeConflictValidatorController::class, 'store'])->name('store-postal-codes');

Route::get('/get-categories', [PostalCodeConflictValidatorController::class, 'index'])->name('get-catogries');

Route::get('/get-stats', [PostalCodeConflictValidatorController::class, 'getStats'])->name('get-stats');

Route::post('/get-sales', [PostalCodeConflictValidatorController::class, 'getSales'])->name('get-sales');

