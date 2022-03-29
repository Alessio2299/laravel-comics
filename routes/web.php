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
    $comics = config('comics');
    return view('homepage', ['comics' => $comics]);
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('comic', ['comic' => $comics[$id]]);
    } else{
        return "Error 404";
    }
})->name('comic');
