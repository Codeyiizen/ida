<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactus');
Route::get('/disclaimer', [App\Http\Controllers\HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/developed', [App\Http\Controllers\HomeController::class, 'developed'])->name('developed');
Route::get('/health-status', [App\Http\Controllers\HomeController::class, 'healthStatus'])->name('health-status');
Route::get('/pub', [App\Http\Controllers\HomeController::class, 'pub'])->name('pub');

Route::get('/iron-deficiency-anaemia', [App\Http\Controllers\HomeController::class, 'ironDeficiencyAnaemia'])->name('iron-deficiency-anaemia');
Route::get('/yoga-poses-managing-anaemia', [App\Http\Controllers\HomeController::class, 'yogaPosesManagingAnaemia'])->name('yoga-poses-managing-anaemia');
Route::get('/disease-management-through-diet', [App\Http\Controllers\HomeController::class, 'diseaseManagementThroughDiet'])->name('disease-management-through-diet');


Route::get('know-iron-deficiency-anaemia', [App\Http\Controllers\HomeController::class, 'knowIronDeficiencyAnaemia'])->name('know-iron-deficiency-anaemia');