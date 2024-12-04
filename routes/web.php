<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Retail\ApprovalController as RetailApproval;
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
    return view('login');
});

// Route::get('/', function () {
//     return view('layout');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/login_', function () {
//     return view('login_');
// });

// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/layout', function () {
    return view('dashboard');
})->name('layout');



//Retail Otorisasi
Route::prefix('retail')->name('retail.')->group(function () {
    Route::prefix('otorisasi')->controller(RetailApproval::class)->group(function () {
        // Route::get('/', 'view')->name('list');
        Route::get('/', function () {
            return view('otorisasi.list');
        })->name('list');
        // Route::get('/{noref}', 'getRetailOtorByNoref')->name('view');
        // Route::post('/{noref}/approve', 'approveRetailByNoref')->name('approve');
        // Route::post('/{noref}/reject', 'rejectRetailByNoref')->name('reject');
    })->name('otor');
    // Route::get('/', 'viewRetailList')->name('list');
    // Route::get('/{noref}', 'viewDetailRetailByNoref')->name('noref');
    // Route::post('/approved', 'viewApprovedRetail')->name('approved');
    // Route::post('/rejected', 'viewRejectedRetail')->name('rejected');
});