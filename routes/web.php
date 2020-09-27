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



Route::get('/donation', [App\Http\Controllers\DonationController::class, 'index'])->name('donation.index');
Route::post('/donation', [App\Http\Controllers\DonationController::class, 'store'])->name('donation.store');

