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
    return view('index');
});
Route::get('/sing-in', function () {
    return view('sing-in');
});
Route::get('/sing-up', function () {
    return view('sing-up');
});
Route::get('/sing-up-company', function () {
    return view('sing-up-company');
});
