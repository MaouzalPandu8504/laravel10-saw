<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DashboradController;

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
Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboradController::class, 'index']) -> middleware(['auth', 'verified']) -> name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::get('/alternatif',[AlternatifController::class, 'read']) -> name('alternatif');

Route::get('/alternatif/create', [AlternatifController::class, 'create']) -> name('create-alternatif');

Route::get('/alternatif/{alternatif}/edit', [AlternatifController::class, 'edit']) -> name('edit-alternatif');

Route::put('/alternatif/{alternatif}', [AlternatifController::class, 'update']) -> name('update-alternatif');

Route::post('/alternatif', [AlternatifController::class,'store']) -> name('store-alternatif');

Route::delete('alternatif/{alternatif}', [AlternatifController::class, 'destroy'])->name('destroy');



Route::get('/bobot', [BobotController::class, 'read']) -> name('bobot');

Route::get('/bobot/{bobot}/edit', [BobotController::class, 'edit']) -> name('edit-bobot');

Route::put('/bobot/{bobot}', [BobotController::class, 'update']) -> name('update-bobot');



Route::get('/normalisasi', [NormalisasiController::class, 'read']) -> name('normalisasi');



Route::get('/hasil', [HasilController::class, 'read']) -> name('hasil');
