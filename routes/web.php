<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PaymentController;
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
Route::get('/home',[CompanyController::class, 'homePage']);

Route::get('/auction', function () {
    return view('auction');
});

Route::get('/auction-details/{id}', [AuctionController::class,'index']);

Route::get('/my-account-bids', function () {
    return view('my-account-bids');
});

Route::get('/personal-profile', function () {
    return view('personal-profile');
});

/** company routes */
// Route::get('/submit-a-bid/{id}',[CompanyController::class, 'submitBid']);
// Route::post('addbid/{id}',[CompanyController::class, 'addbid']);

// Route::get('/profile', function () {
//     return view('company.profile');
// });

// Route::get('/company-profile', function () {
//     return view('company.company-profile');
// });

// Route::get('/company-winning-bids', function () {
//     return view('company.winning-bids');
// });

//Route payment
// Route::get('/payment', function () {
//     return view('payment');
// });

// Route::post('/payment', [PaymentController::class, 'checkout'])->name('payment');


Route::post('createAuction', [AuctionController::class,'create']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/subCategory/{id}', [SubCategoryController::class,'index']);
    Route::get('my-bids', [UserController::class, 'profilePages']);
    Route::get('/personal-profile', [UserController::class, 'personalProfile']);
    Route::post('personal-details-edit', [UserController::class, 'personalDetailsEdit']);
    Route::post('email-address-edit', [UserController::class, 'emailAddressEdit']);
    Route::post('phone-edit', [UserController::class, 'phoneEdit']);
    Route::post('password-edit', [UserController::class, 'passwordEdit'])->name('password-edit');
    Route::post('profilePicEdit', [UserController::class, 'profilePicEdit']);
    Route::post('cancelAuction/{id}', [AuctionController::class, 'cancelAuction'])->name('cancelAuction');
    Route::post('endAuction/{id}', [AuctionController::class, 'endAuction'])->name('endAuction');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register',  [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
        Route::post('/companyReg', [RegisterController::class, 'company_register'])->name('company.register');

        /**
         * Login Routes
         */
        Route::get('/login',  [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    
    
  
});
Route::middleware(['auth:web'])->group(function () {
    // Routes accessible to regular users
    
    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('test.checkout');
    // {{ route('user.logout') }}
    Route::middleware(['auth:web'])->group(function () {
        Route::get('/logout', [LogoutController::class, 'perform'])->name('user.logout');
    });
});

Route::middleware(['auth:companies'])->group(function () {
    // Routes accessible to administrators

    Route::get('/home',[CompanyController::class, 'homePage']);
    Route::get('/submit-a-bid/{id}',[CompanyController::class, 'submitBid']);
    Route::post('addbid/{id}',[CompanyController::class, 'addbid']);

    Route::get('/profile', function () {
        return view('company.profile');
    });
    Route::get('company-profile', [CompanyController::class, 'CompanyProfile'])->name('company-profile');
    
    Route::get('/company-winning-bids', function () {
        return view('company.winning-bids');
    });
    Route::get('/company-code', function () {
        return view('company.code');
    });
    Route::post('/company-profile/email-address-edit', [CompanyController::class, 'emailAddressEdit'])->name('company-email-edit');
    Route::post('/company-profile/commercial-edit', [CompanyController::class, 'commercialEdit'])->name('company-commercial-edit');
    Route::post('/company-profile/company-profile-edit', [CompanyController::class, 'companyProfileEdit'])->name('company-profile-edit');
    Route::post('/company-profile/password-edit', [CompanyController::class, 'passwordEdit'])->name('company-password-edit');

    Route::middleware(['auth:companies'])->group(function () {
        Route::get('/logout-company', [LogoutController::class, 'logout_company'])->name('company.logout');
    });
});