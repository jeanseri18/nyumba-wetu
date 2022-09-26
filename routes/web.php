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
Route::get('home/event', function () {
    return view('home.event');
});
Route::get('home/about', function () {
    return view('home.about');
});
Route::get('home/whoareyou', function () {
    return view('home.whoareyou');
});
Route::get('home/service', function () {
    return view('home.service');
});
Route::get('home/contact', function () {
    return view('home.contact');
});
Route::get('home/help', function () {
    return view('home.help');
});