<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderAdminController;
use App\Http\Controllers\Admin\SliderBannerController;
use App\Http\Controllers\Admin\Product\ProductAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryLocalController;
use App\Http\Controllers\Admin\Category\CategoryProductController;
use App\Http\Controllers\Admin\Orders\OrdersController;
use App\Http\Controllers\Clients\SearchController;
use App\Http\Controllers\Clients\CartController;
use App\Http\Controllers\Clients\PaymentController;



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

Route::get('/', [HomeController::class, 'getIndex'])->name('index');

///Login and Logout
Route::get('/login', [LoginController::class, 'getLogin'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


///Clients

Route::prefix('index')->group(function () {
    Route::get('/', [HomeController::class, 'getIndex'])->name('index');
    Route::get('/product/{id}', [HomeController::class, 'getProductDetails'])->name('product-detail');
    Route::get('/cart', [HomeController::class, 'getCart'])->name('index.cart');
    Route::get('/add-cart/{id}', [CartController::class, 'addCart'])->name('index.add-cart');
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('index.delete-cart');
    Route::get('/update-cart/{id}', [CartController::class, 'updateCart'])->name('index.update-cart');
    Route::get('/update-cart-add/{id}', [CartController::class, 'updateCartAdd'])->name('index.update-cart-add');
    Route::get('/search', [SearchController::class, 'getSearch'])->name('index.search');
    Route::post('/search', [SearchController::class, 'postSearch'])->name('index.post-search');
    Route::get('/payment', [PaymentController::class, 'getPayment'])->name('payment');
    Route::post('/payment', [PaymentController::class, 'postPayment'])->name('post-payment');
    Route::get('/payment_method', [PaymentController::class, 'getPaymentMethod'])->name('payment_method');
    Route::post('/payment_method', [PaymentController::class, 'postPaymentMethod'])->name('post-payment_method');


    Route::post('/get-district', [PaymentController::class, 'getDistrict'])->name('get-district');

    Route::get('/login', [HomeController::class, 'getIndex'])->name('login-user');
});

///Admin
Route::middleware('check.role')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'getHome'])->name('home');
    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderBannerController::class, 'getSlider'])->name('slider');
        Route::post('/', [SliderBannerController::class, 'postSlider']);
        Route::get('/delete-slider/{id}', [SliderBannerController::class, 'deleteSlider'])
        ->name('slider.delete');
        Route::get('/slider-top', [SliderAdminController::class, 'getSliderTop'])->name('slider.slider-top');
        Route::post('/slider-top', [SliderAdminController::class, 'postSliderTop']);
        Route::get('/delete-slider-top/{id}', [SliderAdminController::class, 'deleteSliderTop'])
        ->name('slider.slider-top.delete');
        Route::get('/slider-top-pc', [SliderAdminController::class, 'getSliderTopPC'])->name('slider.slider-top-pc');
        Route::post('/slider-top-pc', [SliderAdminController::class, 'postSliderTopPc'])->name('slider.post-slider-top-pc');
        Route::get('/delete-slider-top-pc/{id}', [SliderAdminController::class, 'deleteSliderTopPc'])->name('slider.delete-slider-top-pc');
       
        Route::get('/slider-flash-sale', [SliderAdminController::class, 'getSliderFlashSale'])->name('slider.slider-flash-sale');
        Route::post('/slider-flash-sale', [SliderAdminController::class, 'postSliderFlashSale'])->name('slider.post-slider-flash-sale');
        Route::get('/delete-slider-flash-sale/{id}', [SliderAdminController::class, 'deleteSliderFlashSale'])->name('slider.delete-slider-flash-sale');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'getCategory'])->name('category');
        Route::post('/', [CategoryController::class, 'postCategory'])->name('category');
        Route::get('/update/{id}', [CategoryController::class, 'getUpdateCategory'])->name('category.update');
        Route::post('/edit', [CategoryController::class, 'postUpdateCategory'])->name('category.post-update');
        Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])
        ->name('category.delete');


        Route::get('/product', [CategoryProductController::class, 'getCategoryProduct'])->name('category.product');
        Route::post('/product', [CategoryProductController::class, 'postCategoryProduct'])->name('category.product');
        Route::get('/product-update/{id}', [CategoryProductController::class, 'getUpdateCategoryProduct'])->name('category.product.update');
        Route::post('/product-update', [CategoryProductController::class, 'postUpdateCategoryProduct'])->name('category.product.post-update');
        Route::get('/product-delete/{id}', [CategoryProductController::class, 'deleteCategoryProduct'])
        ->name('category.product.delete');




        Route::get('/local', [CategoryLocalController::class, 'getCategoryLocal'])->name('category.local');
        Route::post('/local', [CategoryLocalController::class, 'postCategoryLocal'])->name('category.local');
        Route::get('/update-local/{id}', [CategoryLocalController::class, 'getUpdateCategoryLocal'])->name('category.local.update');
        Route::post('/edit-local', [CategoryLocalController::class, 'postUpdateCategoryLocal'])->name('category.local.post-update');
        Route::get('/delete-local/{id}', [CategoryLocalController::class, 'deleteCategoryLocal'])
        ->name('category.local.delete');
  
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductAdminController::class, 'getProduct'])->name('product');
        Route::get('/add', [ProductAdminController::class, 'getAddProduct'])->name('product.add');
        Route::post('/add', [ProductAdminController::class, 'postAddProduct'])->name('product.add');
        Route::get('/update-product/{id}', [ProductAdminController::class, 'getUpdateProduct'])->name('product.update');
        Route::post('/edit-product', [ProductAdminController::class, 'postUpdateProduct'])->name('product.post-update');
        Route::get('/delete-product/{id}', [ProductAdminController::class, 'deleteProduct'])
        ->name('product.delete');
        Route::post('/update-ckeditor', [ProductAdminController::class, 'ckeditorImage'])->name('ckeditor.upload');
        Route::get('/file-browse', [ProductAdminController::class, 'fileBrowse'])->name('file.browse');

        Route::get('/add-image', [ProductAdminController::class, 'getImageProduct'])->name('product.list-image');
        Route::post('/add-image', [ProductAdminController::class, 'postImageProduct'])->name('product.post-list-image');
        Route::get('/delete-image/{id}', [ProductAdminController::class, 'deleteImageProduct'])->name('product.delete-image');
        
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserAdminController::class, 'getUsers'])->name('user');
        Route::get('/add', [UserAdminController::class, 'getAddUser'])->name('user.add');
        Route::post('/add', [UserAdminController::class, 'postAddUser'])->name('user.post-add');
        Route::get('/update/{id}', [UserAdminController::class, 'getUpdateUser'])->name('user.update');
        Route::post('/post-update', [UserAdminController::class, 'postUpdateUser'])->name('user.post-update');
        Route::get('/delete/{id}', [UserAdminController::class, 'deleteUser'])->name('user.delete');
    });
    Route::prefix('orders')->group(function (){
        Route::get('/', [OrdersController::class,'getOrder'])->name('orders');
        Route::get('/order-info/{id}', [OrderOrdersController::class,'getInfoOrder'])->name('orders.info');
        Route::get('/update-order/{id}/{status}', [OrdersController::class,'getUpdate'])->name('orders.post-update');
    });
   

});
