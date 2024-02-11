<?php

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

Route::redirect('/', 'dashboard/ecommerce');

// Dashboard
Route::prefix('dashboard')->group(function () {

    Route::get('ecommerce', function () {
        return view('pages.dashboard-ecommerce', ['menu' => 'dashboard']);
    })->name('dashboard.ecommerce');

    Route::get('general', function () {
        return view('pages.dashboard-general', ['menu' => 'dashboard']);
    })->name('dashboard.general');

});
