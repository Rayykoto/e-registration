<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SetcheckupController;
use App\Http\Controllers\SetoutputController;
use App\Http\Controllers\SetpatientController;
use App\Http\Controllers\SetpaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

//route sementara customer
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store')->name('register.store');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::group(['middleware' => ['auth:1', 'checkRole:1']], function () {
    Route::get('/myprofile', 'App\Http\Controllers\CustomerController@myprofile');
    Route::get('/account', 'App\Http\Controllers\CustomerController@account');
    Route::get('/product', 'App\Http\Controllers\CustomerController@product');
    // });
    //route sementara dashboard admin
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //route user *
    Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');

    //api datatable user
    Route::get('datauser', [\App\Http\Controllers\UserController::class, 'data'])->name('user.data');

    //route get company data datatables
    Route::get('/company/data', [CompanyController::class, 'data'])->name('company.data');

    //route company *
    Route::resource('company', CompanyController::class)->except(['create','edit']);

    //route get checkup data datatables
    Route::get('/checkup/data', [CheckupController::class, 'data'])->name('checkup.data');

    //route checkup *
    Route::resource('checkup', CheckupController::class)->except(['create','edit']);
    
    //route get patient data datatables
    Route::get('/patient/data', [PatientController::class, 'data'])->name('patient.data');

    //route patient *
    Route::resource('patient', PatientController::class)->except(['create', 'edit']);

    //route get payment data datatables
    Route::get('/payment/data', [PaymentController::class, 'data'])->name('payment.data');

    //route payment *
    Route::resource('payment', PaymentController::class)->except(['create', 'edit']);

    //route get output data datatables
    Route::get('/output/data', [OutputController::class, 'data'])->name('output.data');

    //route Output *
    Route::resource('output', OutputController::class)->except(['create', 'edit']);

    //route SetPatient *
    Route::resource('setpatient', SetpatientController::class)->except(['show']);

    //route SetCheckUp *
    Route::resource('setcheckup', SetcheckupController::class)->except(['show']);

    //route SetPayment *
    Route::resource('setpayment', SetpaymentController::class)->except(['show']);

    //route SetOutput *
    Route::resource('setoutput', SetoutputController::class)->except(['show']);
});
