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
Route::get('/login', function () {
    return view('login');
});
Route::get('/car-sales', function () {
    return view('car-sales');
});
Route::get('/car-registration', function () {
    return view('car-registration');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/vendors', function () {
    return view('vendors');
});
Route::get('/car-selling', function () {
    return view('car-selling');
});
Route::get('/view-car-detail', function () {
    return view('view-car-detail');
});
Route::get('/add-vendor', function () {
    return view('add-vendor');
});
