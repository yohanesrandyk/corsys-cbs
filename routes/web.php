<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to
| the "web" middleware group.
|--------------------------------------------------------------------------
*/

// Route to show login page with authentication check
Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login')
    ->middleware('guest');

// Handle login form submissions (POST)
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Layout route (protected)
Route::get('/layout', function () {
    if (!Session::has('authenticated')) {
        return redirect()->route('login'); // Redirect to login if not authenticated
    }
    return view('layout'); // Show the layout if authenticated
})->name('layout');

// Logout route
Route::get('/logout', function () {
    Session::flush(); // Clear all session data
    return redirect()->route('login'); // Redirect to login
})->name('logout');

// Default route redirects to login page
Route::get('/', function () {
    return redirect()->route('login'); // Redirect to login by default
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