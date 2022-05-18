<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MovieReviewsController;

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
    return view('homepage');
});
 
Route::get('/moviereview', function () {
    return view('moviereview');
});

Route::resource('/moviereview', MovieReviewsController::class);

Route::get('/about', function () {
    return view('about');
});

Route::get('/__template', function () {
    return view('__template');
});