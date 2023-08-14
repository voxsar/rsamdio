<?php

use App\Http\Controllers\ProfileController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::redirect('/', 'districts');

//group middleware auth verified function
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('profile', [App\Http\Controllers\DistrictController::class, 'profile'])->name('profile');

    Route::post('profile', [App\Http\Controllers\DistrictController::class, 'profileupdate'])->name('profile.district');
    Route::post('uploadprofile', [App\Http\Controllers\DistrictController::class, 'uploadprofile'])->name('profile.upload');
    Route::post('uploadcover', [App\Http\Controllers\DistrictController::class, 'uploadcover'])->name('cover.upload');

    Route::resource('districts', App\Http\Controllers\DistrictController::class);
    Route::resource('districts.pdrrs', App\Http\Controllers\DistrictPDRRController::class);
    Route::resource('reports', App\Http\Controllers\QuarterlyReportController::class);
    Route::resource('reports.dp', App\Http\Controllers\QuarterlyReportDPController::class);
    Route::resource('reports.cp', App\Http\Controllers\QuarterlyReportCPController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /*Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/
});

require __DIR__.'/auth.php';
