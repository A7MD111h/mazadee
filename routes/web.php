<?php

use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubCategoryController;

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

// Route::get('/home', function () {
//     return view('index');
// });
// Route::get('/sing-in', function () {
//     return view('sing-in');
// });
// Route::get('/sing-up', function () {
//     return view('sing-up');
// });
// Route::get('/sing-up-company', function () {
//     return view('sing-up-company');
// });

Route::get('/auction', function () {
    return view('auction');
});

Route::get('/auction-details/{id}', [AuctionController::class,'index']);

Route::get('/my-account-bids', function () {
    return view('my-account-bids');
});

Route::post('createAuction', [AuctionController::class,'create']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/subCategory/{id}', [SubCategoryController::class,'index']);

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register',  [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
        Route::post('/companyReg',[RegisterController::class, 'company_register'])->name('companyRegister');

        /**
         * Login Routes
         */
        Route::get('/login',  [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});