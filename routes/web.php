<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopcartController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home_2');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [App\Http\Controllers\HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/referance', [App\Http\Controllers\HomeController::class, 'referance'])->name('referance');
Route::get('/product/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'product_detail'])->name('product_detail');
Route::get('/category/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'category_product'])->name('category');

Route::post('/getproduct', [App\Http\Controllers\HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [App\Http\Controllers\HomeController::class, 'productlist'])->name('productlist');

Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');


//admin
Route::middleware("admin")->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');


        //Category
        Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin_category_store');
        Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::get('/category/show/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        Route::get('/category/destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_destroy');

        //car route
        Route::prefix('car')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\CarController::class, 'index'])->name('admin_car');
            Route::get('/create', [App\Http\Controllers\Admin\CarController::class, 'create'])->name('admin_car_create');
            Route::post('/store', [App\Http\Controllers\Admin\CarController::class, 'store'])->name('admin_car_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\CarController::class, 'update'])->name('admin_car_update');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\CarController::class, 'edit'])->name('admin_car_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\CarController::class, 'show'])->name('admin_car_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('admin_car_destroy');

        });
        //message route
        Route::prefix('message')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('/create', [App\Http\Controllers\Admin\MessageController::class, 'create'])->name('admin_message_create');
            Route::post('/store', [App\Http\Controllers\Admin\MessageController::class, 'store'])->name('admin_message_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_destroy');
        });

        //review routees
        Route::prefix('review')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::get('/create', [App\Http\Controllers\Admin\ReviewController::class, 'create'])->name('admin_review_create');
            Route::post('/store', [App\Http\Controllers\Admin\ReviewController::class, 'store'])->name('admin_review_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'edit'])->name('admin_review_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_destroy');

        });

        Route::prefix('faq')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_create');
            Route::post('/store', [App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_destroy');

        });

        //order
        Route::prefix('order')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin_order');
            Route::get('/accepted', [App\Http\Controllers\Admin\OrderController::class, 'accepted'])->name('admin_order_accepted');
            Route::get('/new', [App\Http\Controllers\Admin\OrderController::class, 'new'])->name('admin_order_new');
            Route::get('/cancelled', [App\Http\Controllers\Admin\OrderController::class, 'cancelled'])->name('admin_order_cancelled');
            Route::get('/finished', [App\Http\Controllers\Admin\OrderController::class, 'finished'])->name('admin_order_finished');
            Route::get('/delayed', [App\Http\Controllers\Admin\OrderController::class, 'delayed'])->name('admin_order_delayed');


            Route::get('/create', [App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin_order_create');
            Route::post('/store', [App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin_order_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin_order_update');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin_order_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin_order_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin_order_destroy');

        });
        //image route
        Route::prefix('image')->group(function () {
            Route::get('/{id}', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('admin_car_image');
            Route::post('/store', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_car_image_store');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_car_image_destroy');
        });
        Route::prefix('user')->group(function () {
            Route::get('/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_create');
            Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::post('/role_add/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'role_add'])->name('admin_user_role_add');
            Route::get('/role_edit/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'role_edit'])->name('admin_user_role_edit');
            Route::get('/role_delete/{user_id}/{role_id}', [App\Http\Controllers\Admin\UserController::class, 'role_delete'])->name('admin_user_role_delete');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_destroy');

        });

        Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('/setting/update/{id}', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
    });


});
Route::middleware("auth")->prefix('user')->namespace("user")->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile.show');
    //
    Route::get('/myreview', [UserController::class, 'myreview'])->name('myreview');
    Route::get('/deletereview/{id}', [UserController::class, 'deletereview'])->name('user_review_destroy');

    //user shopcart
    Route::prefix('shopcart')->group(function () {
        Route::get('/', [ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('/store/{id}', [ShopcartController::class, 'store'])->name('user_shopcart_store');
        Route::post('/update/{id}', [ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('/edit/{id}', [ShopcartController::class, 'edit'])->name('user_shopcart_edit');
        Route::get('/show/{id}', [ShopcartController::class, 'show'])->name('user_shopcart_show');
        Route::get('/destroy/{id}', [ShopcartController::class, 'destroy'])->name('user_shopcart_destroy');

    });
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('user_order');
        Route::post('/create', [OrderController::class, 'create'])->name('user_order_create');
        Route::post('/store', [OrderController::class, 'store'])->name('user_order_store');
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('user_order_update');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
        Route::get('/show/{id}', [OrderController::class, 'show'])->name('user_order_show');
        Route::get('/destroy/{id}', [OrderController::class, 'destroy'])->name('user_order_destroy');

    });



});
//adminlogin
Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name('admin_login');
Route::get('/user/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('user_logout');
Route::post('/admin/login_check', [App\Http\Controllers\HomeController::class, 'login_check'])->name('login_check');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
