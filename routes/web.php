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

// Layouts
Route::prefix('layout')->group(function () {

    Route::get('default', function () {
        return view('pages.layouts.layout-default', ['menu' => 'layout']);
    })->name('layout.default');

    Route::get('transparent', function () {
        return view('pages.layouts.layout-transparent', ['menu' => 'layout']);
    })->name('layout.transparent');

    Route::get('top-navigation', function () {
        return view('pages.layouts.layout-top-navigation', ['menu' => 'layout']);
    })->name('layout.top-navigation');
    
});

// Blank
Route::get('blank', function () {
    return view('pages.blank.layout-blank', ['menu' => 'blank']);
})->name('blank');

// Bootstrap
Route::prefix('bootstrap')->group(function () {

    Route::get('alert', function () {
        return view('pages.bootstrap.alert', ['menu' => 'bootstrap']);
    })->name('bootstrap.alert');

    Route::get('badge', function () {
        return view('pages.bootstrap.badge', ['menu' => 'bootstrap']);
    })->name('bootstrap.badge');

    Route::get('breadcrumb', function () {
        return view('pages.bootstrap.breadcrumb', ['menu' => 'bootstrap']);
    })->name('bootstrap.breadcrumb');

    Route::get('button', function () {
        return view('pages.bootstrap.button', ['menu' => 'bootstrap']);
    })->name('bootstrap.button');

    Route::get('card', function () {
        return view('pages.bootstrap.card', ['menu' => 'bootstrap']);
    })->name('bootstrap.card');

    Route::get('carousel', function () {
        return view('pages.bootstrap.carousel', ['menu' => 'bootstrap']);
    })->name('bootstrap.carousel');

    Route::get('collapse', function () {
        return view('pages.bootstrap.collapse', ['menu' => 'bootstrap']);
    })->name('bootstrap.collapse');

    Route::get('dropdown', function () {
        return view('pages.bootstrap.dropdown', ['menu' => 'bootstrap']);
    })->name('bootstrap.dropdown');

    Route::get('form', function () {
        return view('pages.bootstrap.form', ['menu' => 'bootstrap']);
    })->name('bootstrap.form');

    Route::get('list-group', function () {
        return view('pages.bootstrap.list-group', ['menu' => 'bootstrap']);
    })->name('bootstrap.list-group');

    Route::get('media-object', function () {
        return view('pages.bootstrap.media-object', ['menu' => 'bootstrap']);
    })->name('bootstrap.media-object');

    Route::get('modal', function () {
        return view('pages.bootstrap.modal', ['menu' => 'bootstrap']);
    })->name('bootstrap.modal');

    Route::get('nav', function () {
        return view('pages.bootstrap.nav', ['menu' => 'bootstrap']);
    })->name('bootstrap.nav');

    Route::get('navbar', function () {
        return view('pages.bootstrap.navbar', ['menu' => 'bootstrap']);
    })->name('bootstrap.navbar');

    Route::get('pagination', function () {
        return view('pages.bootstrap.pagination', ['menu' => 'bootstrap']);
    })->name('bootstrap.pagination');

    Route::get('popover', function () {
        return view('pages.bootstrap.popover', ['menu' => 'bootstrap']);
    })->name('bootstrap.popover');

    Route::get('progress', function () {
        return view('pages.bootstrap.progress', ['menu' => 'bootstrap']);
    })->name('bootstrap.progress');

    Route::get('table', function () {
        return view('pages.bootstrap.table', ['menu' => 'bootstrap']);
    })->name('bootstrap.table');

    Route::get('tooltip', function () {
        return view('pages.bootstrap.tooltip', ['menu' => 'bootstrap']);
    })->name('bootstrap.tooltip');

    Route::get('typography', function () {
        return view('pages.bootstrap.typography', ['menu' => 'bootstrap']);
    })->name('bootstrap.typography');
    
});

// Components
Route::prefix('components')->group(function () {

    Route::get('article', function () {
        return view('pages.components.article', ['menu' => 'components']);
    })->name('components.article');

    Route::get('avatar', function () {
        return view('pages.components.avatar', ['menu' => 'components']);
    })->name('components.avatar');

    Route::get('chat-box', function () {
        return view('pages.components.chat-box', ['menu' => 'components']);
    })->name('components.chat-box');

    Route::get('empty-state', function () {
        return view('pages.components.empty-state', ['menu' => 'components']);
    })->name('components.empty-state');
    
});