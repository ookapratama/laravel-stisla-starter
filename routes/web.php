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
        return view('pages.dashboard.dashboard-ecommerce', ['menu' => 'dashboard']);
    })->name('dashboard.ecommerce');

    Route::get('general', function () {
        return view('pages.dashboard.dashboard-general', ['menu' => 'dashboard']);
    })->name('dashboard.general');
});

// Features
Route::prefix('feature')->group(function () {

    Route::get('activities', function () {
        return view('pages.features.feature-activities', ['menu' => 'features']);
    })->name('feature.activites');

    Route::get('post-create', function () {
        return view('pages.features.feature-post-create', ['menu' => 'features']);
    })->name('feature.post-create');
    
    Route::get('posts', function () {
        return view('pages.features.feature-posts', ['menu' => 'features']);
    })->name('feature.posts');
    
    Route::get('profile', function () {
        return view('pages.features.feature-profile', ['menu' => 'features']);
    })->name('feature.profile');
    
    Route::get('settings', function () {
        return view('pages.features.feature-settings', ['menu' => 'features']);
    })->name('feature.settings');

    Route::get('setting-detail', function () {
        return view('pages.features.feature-setting-detail', ['menu' => 'features']);
    })->name('feature.setting-detail');

    Route::get('tickets', function () {
        return view('pages.features.feature-tickets', ['menu' => 'features']);
    })->name('feature.tickets');

});
