<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PasswordController;

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

Route::get('/', [ ViewController::class, 'primeNumber' ])->name('home');
Route::get('/series', [ ViewController::class, 'series' ])->name('series');
Route::get('/calculator', [ ViewController::class, 'calculator' ])->name('calculator');
Route::get('/password-generator', [ ViewController::class, 'passwordGenerator' ])->name('password-generator');
Route::get('/blogs', [ ViewController::class, 'blogs' ])->name('blogs');


Route::post('/prime-number', [ PrimeController::class, 'prime' ])->name('prime');
Route::post('/series-addition', [ SeriesController::class, 'seriesAddition' ])->name('series-addition');
Route::post('/make-calculator', [ CalculatorController::class, 'makeCalculator' ])->name('make-calculator');
Route::post('/generate-password', [ PasswordController::class, 'makePassword' ])->name('make-password');
