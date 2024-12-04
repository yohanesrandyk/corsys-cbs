<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Retail\ApprovalController as RetailApproval;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------|
| Web Routes                                                              |
|--------------------------------------------------------------------------|
| Here is where you can register web routes for your application.           |
| These routes are loaded by the RouteServiceProvider and assigned to      |
| the "web" middleware group.                                               |
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('login'); // Default to login page when no session exists
})->name('login');

// Login POST route
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Layout route (protected)
Route::get('/layout', function () {
    if (!Session::has('authenticated')) {
        return redirect()->route('login'); // Redirect to login if session is not authenticated
    }
    return view('layout'); // Show layout if authenticated
})->name('layout');


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
        Route::get('/', 'list')->name('list');
        Route::get('/{noref}', 'view')->name('list');
    })->name('otor');
});
// Route::post('/login', [LoginController::class, 'login'])->name('login');
