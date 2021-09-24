<?php

use App\Http\Controllers\AdvertisementsController;
use Illuminate\Support\Facades\Auth;
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

Route::get("login", [App\Http\Controllers\LoginController::class, 'index'])->name("login");

// Route::get("registerprofile", [App\Http\Controllers\RegisterProfileController::class, 'index2'])->name("register");
// Route::post("registerprofile", [App\Http\Controllers\RegisterProfileController::class, 'saveEmail']);

Route::get("registerprofile", [App\Http\Controllers\RegisterProfileController::class, 'index'])->name("registerprofile");
Route::post("registerprofile", [App\Http\Controllers\RegisterProfileController::class, 'saveEmail'])->name("registerprofile");

Route::get("categories", [App\Http\Controllers\U2CController::class, 'index']);
Route::post("categories", [App\Http\Controllers\U2CController::class, 'create']);

Route::get("audiences", [App\Http\Controllers\U2AController::class, 'index']);
Route::post("audiences", [App\Http\Controllers\U2AController::class, 'create'])->name("audiences.store");


Route::get('/', function () {
    return view('temp-landing-page');
});

Route::get("dashboard", [App\Http\Controllers\DashboardController::class, 'index']);
Route::get("testing", [App\Http\Controllers\DashboardController::class, 'googleAnalytics']);

Route::get('advertisements', [App\Http\Controllers\AdvertisementsController::class, 'index']);

Route::get('campaigns', [App\Http\Controllers\CampaignsController::class, 'index']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('videos', [App\Http\Controllers\VideosController::class, 'index']);

Route::get('addons', [App\Http\Controllers\AddonsController::class, 'index']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
