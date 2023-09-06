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
})->name('welcome'); //->name('welcome') = harus sesuai dengan nama href yang didirect, kalo nama href nya checkout, maka welcome juga di sini


Route::get('login', function () { //get('login' = ini nama pemanggil, dan ini bebas 
    return view('login'); //nama file di views
})->name('login'); //->name('login') = harus sesuai dengan nama href yang didirect, kalo nama href nya login, maka login juga di sini

Route::get('checkout', function () { //get('checkout' = ini nama pemanggil, dan ini bebas 
    return view('checkout'); //nama file di views
})->name('checkout'); //->name('checkout') = harus sesuai dengan nama href yang didirect, kalo nama href nya checkout, maka checkout juga di sini


Route::get('success-checkout', function () { //get('checkout' = ini nama pemanggil, dan ini bebas 
    return view('success_checkout'); //nama file di views
})->name('success-checkout');//->name('checkout') = harus sesuai dengan nama href yang didirect, kalo nama href nya checkout, maka checkout juga di sini
