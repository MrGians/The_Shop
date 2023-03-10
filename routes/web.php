<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
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
require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->prefix('dashboard')->namespace('Admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // 404 Route
    Route::get('/{any?}', function () {
        abort('404');
    })->where('any', '.*');
});


// Guest Route (check front.js)
Route::get('/{any?}', function () {
    return view('guest.home');
})->name('guest.home')->where('any', '.*');