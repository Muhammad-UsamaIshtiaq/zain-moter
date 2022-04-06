<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Models\CarRegistration;

use function PHPUnit\Framework\returnSelf;

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
    return view('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/add-vendor', function () {
        return view('add-vendor');
    });
    Route::get('/home', function () {
        return view('index');
    });
    Route::get('/car-sales', function () {
        return view('car-sales');
    });
    Route::get('/car-registration', function () {
        return view('car-registration');
    });
    Route::get('/products', function () {
        $cars = CarRegistration::all();
        return view('products', compact('cars'));
    });
    Route::get('/vendors', function () {
        return view('vendors');
    });
    Route::get('/car-selling', function () {
        return view('car-selling');
    });
    Route::get('/view-car-detail/{car_id}', function ($car_id) {
        $car_detail = CarRegistration::where(['id'=> $car_id])->first();
        if(empty($car_detail))
        return redirect('products')->with(['success_message'=> 'Details Not Available']);

        return view('view-car-detail', compact('car_detail'));
    });

    Route::POST('register_car',[CarController::class, 'register_car']);
    Route::GET('delete_car/{car_id}',[CarController::class, 'delete_car']);
});
