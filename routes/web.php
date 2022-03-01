<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
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
    return view('/auth/login');
});

//route sementara dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//route user *
Route::resource('user', UserController::class)->except(['show']);

//route company *
Route::resource('company', CompanyController::class)->except(['show']);

//route checkup *
Route::resource('checkup', CheckupController::class)->except(['show']);

//route patient *
Route::resource('patient', PatientController::class)->except(['show']);

//route payment *
Route::resource('payment', PaymentController::class)->except(['show']);

//route Output *
Route::resource('output', OutputController::class)->except(['show']);



//route sementara customer
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::get('/myprofile', 'App\Http\Controllers\CustomerController@myprofile');
Route::get('/account', 'App\Http\Controllers\CustomerController@account');
Route::get('/product', 'App\Http\Controllers\CustomerController@product');
