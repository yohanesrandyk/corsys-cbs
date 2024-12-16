<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FixedAsset\AssetController;

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

Route::prefix('fixed-asset')->name('api.fixaset.')->group(function () {
	Route::prefix('aset')->controller(AssetController::class)->group(function () {
		Route::get('/data-kelompok', 'apiDataKelompok')->name('index');
		Route::get('/input', 'input')->name('input');

		Route::get('/barcode', 'getBarcode')->name('barcode');
		Route::get('/last-number', 'getLastNoref')->name('lastnoref');
	})->name('otor');
});
