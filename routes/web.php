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

// Returns a view you can use for testing new things (will be removed at some point)
Route::get('testing', function () {
    return view('testing');
});

Route::get('/', 'DashboardController@index');

Route::get("dashboard", 'DashboardController@index');

Route::get('advertisements', 'AdvertisementsController@index');

Route::get('campaigns', 'CampaignsController@index');

Route::get('profile', 'ProfileController@index');

Route::get('videos', 'VideosController@index');

Route::get('addons', 'AddonsController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
