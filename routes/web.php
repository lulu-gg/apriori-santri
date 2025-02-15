<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\AprioriController;
use App\Http\Controllers\KelasController;

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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/normalization', [NormalizationController::class, 'index'])->name('normalization.index');
    Route::post('/normalization/process', [NormalizationController::class, 'process'])->name('normalization.process');    

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('santris', SantriController::class);

    Route::get('/apriori', [AprioriController::class, 'index'])->name('apriori.index');
    Route::post('/apriori/process', [AprioriController::class, 'process'])->name('apriori.process');

    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas/process', [KelasController::class, 'process'])->name('kelas.process');
});

// Nonaktifkan rute register
Auth::routes(['register' => false]);

// Hapus pemanggilan duplikat Auth::routes()
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
