<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Retail\ApprovalController as RetailApproval;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FixedAsset\AssetController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FixedAsset\QrCodeController;

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
    return redirect()->route('dashboard'); // Redirect to dashboard if authenticated
})->name('layout');

// Route to get pendingRowsCount (VIEW_PENDING_OTOR)
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

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



//Retail Otorisasi
Route::prefix('retail')->name('retail.')->group(function () {
    Route::prefix('otorisasi')->controller(RetailApproval::class)->group(function () {
        Route::get('/', 'list')->name('list');
        Route::get('/{noref}', 'view')->name('list');
    })->name('otor');
});

// Fixed Asset
Route::prefix('fixed-asset')->name('fixaset.')->group(function () {
    Route::prefix('aset')->controller(AssetController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/input', 'input')->name('input');
        Route::get('/{barcode}', 'barcode')->name('barcode');
        Route::get('/{barcode}/edit', 'edit')->name('edit');

        Route::get('/barcode', 'getBarcode')->name('getBarcode');
        Route::get('/last-number', 'getLastNoref')->name('lastnoref');

        Route::get('/qrcode/scanner', [QrCodeController::class, 'scanner'])->name('scan');
    })->name('otor');
});

Route::get('/qrcode/scanner', [QrCodeController::class, 'scanner2'])->name('fixed');
Route::get('/qrcode/{barcode}', [QrCodeController::class, 'qrcode']);

// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::prefix('/docs')->name('docs.')->controller(FileController::class)->group(function () {
    Route::get('/image/{filename}', 'showImage')
        ->name('image')
        ->where('filename', '.*');
    Route::get('/download/{encodedFilename}', 'downloadFile')
        ->name('downloadDocs')
        ->where('encodedFilename', '.*');
});
