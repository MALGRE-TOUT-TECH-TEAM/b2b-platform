<?php

use App\Http\Controllers\AdvertisementsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// NOTE: This way of routing (not using Controllers) might just be a tech loan.

// Returns a view you can use for testing new things (will be removed at some point)
Route::get('testing', function () {
    return view('testing');
});

Route::get('/', function () {
    return view('dashboard');
});
Route::get("dashboard", function () {
    return view('dashboard');
});

Route::get('advertisements', function() {
    return view('advertisements');
});

Route::get('campaigns', function() {
    return view('campaigns');
});

// Will probably need an id to identify which profile to load.
Route::get('profile', function () {
    return view('profile');
});
Route::get('videos', function () {
    return view('videos');
});
Route::get('addons', function () {
    return view('addons');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
