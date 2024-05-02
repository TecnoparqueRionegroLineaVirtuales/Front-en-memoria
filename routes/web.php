<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;


// landing
Route::get('/', function () {
    return view('landing.index');
})->name('index');
Route::get('landing/inicio', [LandingController::class, 'inicio'])->name('landing.inicio');
Route::get('landing/murales', [LandingController::class, 'inicio'])->name('landing.murales');
Route::get('landing/ruta', [LandingController::class, 'inicio'])->name('landing.ruta');
Route::get('landing/tienda', [LandingController::class, 'inicio'])->name('landing.tienda');
Route::get('landing/app', [LandingController::class, 'inicio'])->name('landing.app');
Route::get('landing/carrito', [LandingController::class, 'inicio'])->name('landing.carrito');






// aut
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
