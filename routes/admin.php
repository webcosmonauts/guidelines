<?php

use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
*/

Route::namespace('App\\Http\\Controllers\\Web')->group(function () {
    Auth::routes([
        'register' => false,
        'reset' => false,
        'confirm' => false,
        'verify' => false,
    ]);
});

Route::middleware(['auth.admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});
