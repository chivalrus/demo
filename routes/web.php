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

Route::get('/57806', function () {
    return view('57806');
});

Route::get('/58330', function () {
    return view('58330');
});

Route::get('/58740', function () {
    return view('58740');
});

Route::get('/58900', function () {
    return view('58900');
});