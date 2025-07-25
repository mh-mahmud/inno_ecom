<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CountryController;


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


//Route::get('/', [FrontendController::class, 'html'])->name('index');
Route::get('/index', [FrontendController::class, 'index'])->name('index');
Route::get('category-products/{category_id}', [FrontendController::class, 'categoryProduct'])->name('category-products');
Route::get('/product-details/{id}', [FrontendController::class, 'productDetails'])->name('product-details');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/post_login', [AuthController::class, 'postLogin'])->name('login.post');

# added routes
Route::get('user-login', [AuthController::class, 'user_login'])->name('user-login');
Route::get('user-register', [AuthController::class, 'user_register'])->name('user-register');
Route::get('all-products', [FrontendController::class, 'all_products'])->name('all-products');
Route::get('track-your-order', [FrontendController::class, 'track_your_order'])->name('track-your-order');
Route::post('track-your-order', [FrontendController::class, 'post_track_your_order'])->name('post-track-your-order');
Route::get('user-carts', [FrontendController::class, 'user_cart'])->name('user-carts');
//Route::get('add-to-cart/{product_id}', [FrontendController::class, 'add_to_cart'])->name('add-to-cart');
Route::post('add-to-cart/{product_id}', [FrontendController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('add-to-cart-details', [FrontendController::class, 'add_to_cart_details'])->name('add-to-cart-details');
Route::get('add-to-wishlist/{product_id}', [FrontendController::class, 'add_to_wishlist'])->name('add-to-wishlist');
Route::get('my-wishlist', [FrontendController::class, 'my_wishlist'])->name('my-wishlist');
Route::post('/wishlist/add', [FrontendController::class, 'add_wishlist'])->name('wishlist.add');
Route::get('remove-wishlist/{id}', [FrontendController::class, 'remove_wishlist'])->name('remove-wishlist');
Route::get('remove-from-cart/{id}', [FrontendController::class, 'remove_from_cart'])->name('remove-from-cart');

Route::get('checkout', [FrontendController::class, 'checkout_page'])->name('checkout');
Route::post('go-checkout', [FrontendController::class, 'go_checkout'])->name('go-checkout');
Route::post('checkout', [FrontendController::class, 'checkout_store'])->name('checkout-store');
Route::post('product-search', [FrontendController::class, 'product_search'])->name('product-search');
Route::post('post-contact-form', [FrontendController::class, 'post_contact_form'])->name('post-contact-form');


Route::group(['middleware' => ['auth']], function () {
	Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

	
	// users route
    Route::get('user-list',        [UserController::class, 'index'])->name('users.index')->middleware(['check-permission']);
    Route::get('user-show/{id?}',        [UserController::class, 'show'])->name('user.show')->middleware(['check-permission']);
    Route::get('create-user',      [UserController::class, 'create'])->name('create-user')->middleware(['check-permission']);
    Route::post('create-user',      [UserController::class, 'store'])->name('store-user');
    Route::get('edit-user/{id?}',      [UserController::class, 'edit_form'])->name('user.edit')->middleware(['check-permission']);
    Route::post('user-update',      [UserController::class, 'update'])->name('user.update');
    Route::get('user-details/{id?}',     [UserController::class, 'show'])->middleware(['check-permission']);
    Route::delete('user-delete/{id?}',   [UserController::class, 'destroy'])->name('user.destroy')->middleware(['check-permission']);
	Route::get('user-profile/{id}',        [UserController::class, 'user_profile'])->name('user-profile');
	Route::get('/account-settings/{id?}/edit', [UserController::class, 'profile_edit'])->name('profile-edit');
	Route::put('/account-settings/{id}', [UserController::class, 'profile_update'])->name('profile-update');
	Route::post('/user/search', [UserController::class, 'search'])->name('user-search');
	Route::put('/user/{id}/update-profile-image', [UserController::class, 'updateProfileImage'])->name('update-profile-image');

    Route::get('permission-list',        [UserController::class, 'permission_index'])->name('permission.index')->middleware(['check-permission']);
    Route::get('permission-show/{id}',        [UserController::class, 'permission_show'])->name('permission.show')->middleware(['check-permission']);
    Route::get('create-permission',      [UserController::class, 'permission_create'])->name('create-permission')->middleware(['check-permission']);
    Route::post('create-permission',      [UserController::class, 'permission_store'])->name('store-permission')->middleware(['check-permission']);
    Route::get('edit-permission/{id}',      [UserController::class, 'permission_edit'])->name('permission.edit')->middleware(['check-permission']);
    Route::post('permission-update',      [UserController::class, 'permission_update'])->name('permission.update')->middleware(['check-permission']);
    Route::get('permission-details/{id}',     [UserController::class, 'permission_show'])->middleware(['check-permission']);
    Route::delete('permission-delete/{id}',   [UserController::class, 'permission_destroy'])->name('permission.destroy')->middleware(['check-permission']);
	Route::post('/permission/search', [UserController::class, 'permission_search'])->name('permission-search')->middleware(['check-permission']);

    Route::get('role-list',        [UserController::class, 'role_index'])->name('role-list')->middleware(['check-permission']);
    Route::get('role-show/{id}',        [UserController::class, 'role_show'])->name('role.show')->middleware(['check-permission']);
    Route::get('role-create',      [UserController::class, 'role_create'])->name('role-create')->middleware(['check-permission']);
    Route::post('role-create',      [UserController::class, 'role_store'])->name('role-store')->middleware(['check-permission']);
    Route::get('role-edit/{id}',      [UserController::class, 'role_edit'])->name('role-edit')->middleware(['check-permission']);
    Route::post('role-update',      [UserController::class, 'role_update'])->name('role-update')->middleware(['check-permission']);
    Route::delete('role-delete/{id}',   [UserController::class, 'role_destroy'])->name('role-destroy')->middleware(['check-permission']);
	Route::post('/role/search', [UserController::class, 'role_search'])->name('role-search')->middleware(['check-permission']);



	// Product routes start
	Route::get('product-list', [ProductController::class, 'productList'])->name('product-list')->middleware(['check-permission']);
	Route::get('add-product', [ProductController::class, 'productCreate'])->name('add-product')->middleware(['check-permission']);
	Route::post('add-product-pro', [ProductController::class, 'productStore'])->name('add-product-pro');
	Route::delete('product-delete/{id?}', [ProductController::class, 'productDelete'])->name('product-delete')->middleware(['check-permission']);
	Route::get('product-show/{id?}', [ProductController::class, 'productShow'])->name('product-show')->middleware(['check-permission']);
	Route::get('product-edit/{id?}', [ProductController::class, 'productEdit'])->name('product-edit')->middleware(['check-permission']);
	Route::put('product-update-pro/{id}', [ProductController::class, 'productUpdate'])->name('product-update-pro');
	
	// Country routes start
	Route::get('country-list', [countryController::class, 'countryList'])->name('country-list');
	Route::get('add-country', [countryController::class, 'countryCreate'])->name('add-country');
	Route::post('add-country-pro', [countryController::class, 'countryStore'])->name('add-country-pro');
	Route::delete('country-delete/{id?}', [countryController::class, 'countryDelete'])->name('country-delete');

	// Country routes end

	// Currency routes start
	Route::get('currency-list', [CurrencyController::class, 'currencyList'])->name('currency-list');
	Route::get('add-currency', [CurrencyController::class, 'currencyCreate'])->name('add-currency');
	Route::post('add-currency-pro', [CurrencyController::class, 'currencyStore'])->name('add-currency-pro');
	Route::delete('currency-delete/{id?}', [CurrencyController::class, 'currencyDelete'])->name('currency-delete');
	
	

	// slider routes
	Route::get('sliders', [SliderController::class, 'index'])->name('slider-list')->middleware(['check-permission']);
    Route::get('slider/create', [SliderController::class, 'create'])->name('slider-create')->middleware(['check-permission']);
	Route::post('slider', [SliderController::class, 'store'])->name('slider-store');
	Route::get('slider/{id?}', [SliderController::class, 'show'])->name('slider-show')->middleware(['check-permission']);
	Route::get('slider/{id?}/edit', [SliderController::class, 'edit'])->name('slider-edit')->middleware(['check-permission']);
	Route::put('slider/{id?}', [SliderController::class, 'update'])->name('slider-update');
	Route::post('slider/search', [SliderController::class, 'search'])->name('slider-search');
	Route::delete('slider/{id?}', [SliderController::class, 'destroy'])->name('slider-destroy')->middleware(['check-permission']);
	Route::put('slider/{id}/update-slider-image', [SliderController::class, 'updateSliderImage'])->name('update-slider-image');

	// brand routes
	Route::get('brands', [BrandController::class, 'index'])->name('brand-list')->middleware(['check-permission']);
    Route::get('brand/create', [BrandController::class, 'create'])->name('brand-create')->middleware(['check-permission']);
	Route::post('brand', [BrandController::class, 'store'])->name('brand-store');
	Route::get('brand/{id?}', [BrandController::class, 'show'])->name('brand-show')->middleware(['check-permission']);
	Route::get('brand/{id?}/edit', [BrandController::class, 'edit'])->name('brand-edit')->middleware(['check-permission']);
	Route::put('brand/{id?}', [BrandController::class, 'update'])->name('brand-update');
	Route::post('brand/search', [BrandController::class, 'search'])->name('brand-search');
	Route::delete('brand/{id?}', [BrandController::class, 'destroy'])->name('brand-destroy')->middleware(['check-permission']);
	Route::put('brand/{id}/update-brand-image', [BrandController::class, 'updatebrandImage'])->name('update-brand-image');

	// category routes
	Route::get('categories', [CategoryController::class, 'index'])->name('category-list')->middleware(['check-permission']);
    Route::get('category/create', [CategoryController::class, 'create'])->name('category-create')->middleware(['check-permission']);
	Route::post('category', [CategoryController::class, 'store'])->name('category-store');
	Route::get('category/{id?}', [CategoryController::class, 'show'])->name('category-show')->middleware(['check-permission']);
	Route::get('category/{id?}/edit', [CategoryController::class, 'edit'])->name('category-edit')->middleware(['check-permission']);
	Route::put('category/{id?}', [CategoryController::class, 'update'])->name('category-update');
	Route::post('category/search', [CategoryController::class, 'search'])->name('category-search');
	Route::delete('category/{id?}', [CategoryController::class, 'destroy'])->name('category-destroy')->middleware(['check-permission']);
	Route::put('category/{id}/update-category-image', [CategoryController::class, 'updatecategoryImage'])->name('update-category-image');


	// Orders Routes
	Route::get('/orders', [OrderController::class, 'index'])->name('orders-index')->middleware(['check-permission']);
	Route::get('/orders/create', [OrderController::class, 'create'])->name('orders-create')->middleware(['check-permission']);
	Route::post('/orders', [OrderController::class, 'store'])->name('orders-store');
	Route::get('/orders/{id?}', [OrderController::class, 'show'])->name('orders-show')->middleware(['check-permission']);
	Route::get('/orders/{id?}/edit', [OrderController::class, 'edit'])->name('orders-edit')->middleware(['check-permission']);
	Route::put('/orders/{id?}', [OrderController::class, 'update'])->name('orders-update');
	Route::post('/orders/search', [OrderController::class, 'search'])->name('orders-search');
	Route::delete('/orders/{id?}', [OrderController::class, 'destroy'])->name('orders-destroy')->middleware(['check-permission']);
	Route::post('/orders/order-status-update/{id?}', [OrderController::class, 'updateOrderStatus'])->name('order-status-update');
	Route::get('/order-status/{id?}', [OrderController::class, 'getOrderStatus'])->name('order-status');



});