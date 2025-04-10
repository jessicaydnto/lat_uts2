<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    return view('welcome');
});

Route::get('/flights', [FlightController::class, 'index']);
//Route::get('/flights/book/{id}', [FlightController::class, 'book'])->name('flights.book');

Route::get('/flights/book/{flight}', [TicketController::class, 'create']);
Route::post('/ticket/submit', [TicketController::class, 'store']); // ketika tombol book ticket s






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
