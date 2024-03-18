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

Route::get('/', function () {
    $title= 'Home';
    return view('home', compact('title'));
})->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

/*Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');*/