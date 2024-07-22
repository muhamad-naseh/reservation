<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Landing\CategoryController as LandingCategoryController;
use App\Http\Controllers\Landing\CartController;
use App\Http\Controllers\Landing\ReviewController as LandingReviewController;
use App\Http\Controllers\Landing\CheckoutController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MyMenuController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NotificationDatabaseController;

use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\MenuController as MemberMenuController;
use App\Http\Controllers\Member\MyMenuController as MemberMyMenuController;
use App\Http\Controllers\Member\ReviewController as MemberReviewController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
use App\Http\Controllers\Member\ProfileController as MemberProfileController;
use App\Http\Controllers\Landing\MenuController as LandingMenuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard',function () {
    return view('layouts.coba.content.dashboard');
});
Route::get('/table',function () {
    return view('layouts.coba.content.table');
});
Route::get('/form',function () {
    return view('layouts.coba.content.form');
});
Route::get('/table3',function () {
    return view('layouts.coba.content.table3');
});
Route::get('/table2',function () {
    return view('layouts.coba.content.table2');
});

// home route
Route::get('/', HomeController::class)->name('home');
// category route
Route::get('/category/{category:slug}', LandingCategoryController::class)->name('category');
// cart route
Route::controller(CartController::class)->middleware('auth')->as('cart.')->group(function(){
    Route::get('/cart', 'index')->name('index');
    Route::post('/cart/{menu}', 'store')->name('store');
    Route::put('/cart/{cart}', 'update')->name('update');
    Route::delete('/cart/{cart}', 'delete')->name('destroy');
});
Route::controller(LandingMenuController::class)->as('menu.')->group(function(){
    Route::get('/menu', 'index')->name('index');
    Route::get('/menu/{menu:slug}', 'show')->name('show');
//    Route::get('/menu/{menu:slug}/{video:episode}', 'video')->name('video');
});
// review route
Route::get('/review', LandingReviewController::class)->name('review');
// checkout route
Route::get('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');


// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // admin category route
    Route::resource('/category', CategoryController::class);
    // admin menu route
    Route::resource('/menu', MenuController::class);
    Route::get('/my-menu', MyMenuController::class)->name('mymenu');
    // admin review route
    Route::controller(ReviewController::class)->group(function(){
        Route::get('/review', 'index')->name('review.index');
        Route::post('/review/{menu}', 'store')->name('review');
    });
    // admin transaction route
    Route::resource('/transaction', TransactionController::class)->only('index', 'show');
    // admin user route
    Route::controller(UserController::class)->as('user.')->group(function(){
        Route::get('/user/profile', 'profile')->name('profile');
        Route::put('/user/profile/{user}', 'profileUpdate')->name('profile.update');
        Route::put('/user/profile/password/{user}', 'profile')->name('profile.password');
    });
    Route::resource('/user', UserController::class)->only('index', 'update', 'destroy');
    // admin marknotification route
    Route::controller(NotificationDatabaseController::class)->group(function(){
        Route::post('/mark-as-read/{id}', 'readNotification')->name('markNotification');
        Route::post('/mark-all-read', 'readAllNotification')->name('markAllRead');
    });
});


// member route
Route::group(['as' => 'member.', 'prefix' => 'account', 'middleware' => ['auth', 'role:member|cashier']], function(){
    // member dashboard route
    Route::get('/dashboard', MemberDashboardController::class)->name('dashboard');
    // member menu route
    Route::resource('/menu', MemberMenuController::class)->middleware('role:cashier');
    Route::get('/my-menu', MemberMyMenuController::class)->name('mymenu');
    // member review route
    Route::post('/review/{menu}', [MemberReviewController::class, 'store'])->name('review');
    // member transaction route
    Route::resource('/transaction', MemberTransactionController::class)->only('index', 'show');
    // member profile route
    Route::controller(MemberProfileController::class)->as('profile.')->group(function(){
        Route::get('/profile', 'index')->name('index');
        Route::put('/profile/{user}', 'updateProfile')->name('update');
        Route::put('/profile/password/{user}', 'updatePassword')->name('password');
    });
});
