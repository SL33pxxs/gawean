<?php

use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('create', [LandingController::class, 'create'])->name('create');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('support', [LandingController::class, 'support'])->name('support');
Route::get('copyright-policy', [LandingController::class, 'copyrightPolicy'])->name('copyright-policy');
Route::get('terms-conditions', [LandingController::class, 'termsConditions'])->name('terms-conditions');
Route::get('privacy-policy', [LandingController::class, 'privacyPolicy'])->name('privacy-policy');

Route::post('check-kode', [LandingController::class, 'check_kode'])->name('check-kode');
