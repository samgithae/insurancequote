<?php

use App\Http\Controllers\InsuranceCoverRateController;
use App\Http\Controllers\LeadController;
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

Route::get('/', function () {
    return view('leads.create');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('leads', \App\Http\Controllers\LeadController::class);
Route::resource('insuranceProvider', \App\Http\Controllers\InsuranceProviderController::class);
Route::resource('insuranceCover', \App\Http\Controllers\InsuranceCoverController::class);
Route::resource('benefit', \App\Http\Controllers\BenefitController::class);
Route::resource('excess', \App\Http\Controllers\ExcessController::class);
Route::resource('order', \App\Http\Controllers\OrderController::class);
Route::resource('insuranceCoverRate', \App\Http\Controllers\InsuranceCoverRateController::class);
Route::resource('getQuote', \App\Http\Controllers\GetQuoteController::class);


require __DIR__.'/auth.php';
