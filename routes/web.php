<?php

use App\Http\Controllers\LoginController;
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
    return view('layout');
})->name('layout');