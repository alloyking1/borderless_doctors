<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
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
})->name('pages.home');

Route::view('/contact', 'Contact')->name('pages.contact');
Route::view('/about', 'About')->name('pages.about');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/become-a-doctor', [DoctorController::class, 'becomeDoctor'])->name('dashboard.become-a-doctor');
    Route::get('/request-a-doctor', [DoctorController::class, 'requestDoctor'])->name('dashboard.request-a-doctor');
    Route::post('/request-a-doctor', [DoctorController::class, 'doctorApplication'])->name('dashboard.request-a-doctor');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
