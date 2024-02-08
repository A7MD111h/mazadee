<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoriesController;
// use App\Http\Controllers\Admin\SubCategoryController;
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

Route::get('/auction-done-details', function () {
    return view('auction-done-details');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/notification', function () {
    return view('notification');
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

Route::get('/notificationcompany', function () {
    return view('company.notificationcompany');
});

Route::post('createAuction', [AuctionController::class,'create']);

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/subCategory/{id}', [SubCategoryController::class,'index']);
    Route::get('my-bids', [UserController::class, 'profilePages'])->name('my_bids');
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
    
    Route::get('/checkout/{id}', [PaymentController::class, 'checkout'])->name('test.checkout');
    Route::post('/payment/checkout/{id}', [PaymentController::class, 'chenk_payment'])->name('chenk_payment');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/auction-done-details/{id}', [UserController::class, 'orderDetails'])->name('order_details');
    // {{ route('user.logout') }}
    Route::middleware(['auth:web'])->group(function () {
        Route::get('/logout', [LogoutController::class, 'perform'])->name('user.logout');
    });
});

Route::middleware(['auth:companies'])->group(function () {
    // Routes accessible to administrators

    Route::get('/home',[CompanyController::class, 'homePage'])->name('homePage');
    Route::get('/submit-a-bid/{id}',[CompanyController::class, 'submitBid']);
    Route::post('addbid/{id}',[CompanyController::class, 'addbid']);

    Route::get('/profile', function () {
        return view('company.profile');
    });
    Route::get('company-profile', [CompanyController::class, 'CompanyProfile'])->name('company-profile');
    Route::get('/profile', [CompanyController::class, 'activity_profile'])->name('activity_profile');
    Route::get('/company-winning-bids', [CompanyController::class, 'companyWinningBids'])->name('company-winning-bids');
    
    Route::get('/company-code', [CompanyController::class, 'companyCode'])->name('company_code');
    Route::post('/company-codes', [CompanyController::class, 'companyCodes'])->name('company_codes');
    
    Route::post('/company-profile/email-address-edit', [CompanyController::class, 'emailAddressEdit'])->name('company-email-edit');
    Route::post('/company-profile/commercial-edit', [CompanyController::class, 'commercialEdit'])->name('company-commercial-edit');
    Route::post('/company-profile/company-profile-edit', [CompanyController::class, 'companyProfileEdit'])->name('company-profile-edit');
    Route::post('/company-profile/password-edit', [CompanyController::class, 'passwordEdit'])->name('company-password-edit');

    Route::middleware(['auth:companies'])->group(function () {
        Route::get('/logout-company', [LogoutController::class, 'logout_company'])->name('company.logout');
    });
});

//admin
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });


Route::middleware(['auth:admin'])->group(function () {
    // Admin-only routes
    


    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout-admin', [LogoutController::class, 'logout_admin'])->name('admin.logout');
    });
});

Route::get('/admin/dashboard', [AdminLoginController::class, 'index'])->name('dashboard');
Route::get('/admin/dashboard/login', [AdminLoginController::class, 'showLoginForm'])->name('admin_login');
Route::post('/admin/dashboard/login/gg', [AdminLoginController::class, 'login'])->name('admin_login_dashboard');
Route::get('/admin/dashboard/signin', [AdminLoginController::class, 'signin'])->name('admin_signin');
Route::post('/admin/dashboard/save', [AdminLoginController::class, 'stor'])->name('admin_sing_in');


// Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
// Route::get('/admin/dashboard/login', [AdminLoginController::class, 'showLoginForm'])->name('admin_login');
// Route::post('/admin/dashboard/login/gg', [AdminLoginController::class, 'login'])->name('admin_login_dashboard');
// Route::get('/admin/dashboard/signin', [AdminLoginController::class, 'signin'])->name('admin_signin');
// Route::post('/admin/dashboard/save', [AdminLoginController::class, 'stor'])->name('admin_sing_in');

Route::get('/admin/dashboard/categories', [CategoriesController::class, 'index'])->name('view_Categories');
Route::get('/admin/dashboard/category/add', [CategoriesController::class, 'create'])->name('admin_category_add');//admin_category_add
Route::post('/admin/dashboard/category/store', [CategoriesController::class, 'store'])->name('admin_category_store');
Route::get('/admin/dashboard/category/edit/{id}', [CategoriesController::class, 'edit'])->name('admin_category_edit');//admin_category_edit
Route::post('/admin/dashboard/category/update/{id}', [CategoriesController::class, 'update'])->name('admin_category_update');
Route::delete('/admin/dashboard/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('admin_category_delete');//admin_category_delete
Route::get('/admin/dashboard/category/delete/permanently/{id}', [CategoriesController::class, 'destroyPermanently'])->name('admin_category_finsh');//admin_category_delete

Route::get('/admin/dashboard/Sub_Category', [SubCategoryController::class, 'view'])->name('view_Sub_Category');
Route::get('/admin/dashboard/Sub_Category/add', [SubCategoryController::class, 'create'])->name('admin_sub_category_add');//admin_sub_category_add
Route::post('/admin/dashboard/Sub_Category/store', [SubCategoryController::class, 'store'])->name('admin_sub_category_store');
Route::get('/admin/dashboard/Sub_Category/edit/{id}', [SubCategoryController::class, 'edit'])->name('admin_sub_category_edit');//admin_sub_category_edit
Route::post('/admin/dashboard/Sub_Category/update/{id}', [SubCategoryController::class, 'update'])->name('admin_sub_category_update');
Route::delete('/admin/dashboard/Sub_Category/delete/{id}', [SubCategoryController::class, 'destroy'])->name('admin_sub_category_delete');//admin_sub_category_delete
Route::get('/admin/dashboard/Sub_Category/change-stock/{id}', [SubCategoryController::class, 'change_stock'])->name('admin_sub_category_change_stock');