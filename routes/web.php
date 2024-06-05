<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AsisstController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ConfigurationController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('students', StudentsController::class);

    Route::get('/asissts', [AsisstController::class, 'index'])->name('asissts.index');
    Route::post('/asissts/search', [AsisstController::class, 'search'])->name('asissts.search');
    Route::post('/asissts', [AsisstController::class, 'store'])->name('asissts.store');
    Route::get('/select-date', function () {
        return view('asissts.select-date');
    })->name('select-date');
    Route::get('/asissts/by_date', [AsisstController::class, 'getAsisstsByDate'])->name('asissts.by_date');

    Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
    
    Route::resource('configurations', ConfigurationController::class);
});

require __DIR__.'/auth.php';
