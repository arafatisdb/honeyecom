<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CustomarController as BackendCustomarController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ShippingChargeController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CustomarController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Order;
use Database\Seeders\ShappingChargeSeeder;
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

Route::prefix('')->group(function () {
    Route::get('/home/search', [HomeController::class, 'categoryProducts'])->name('home.search');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/category/{id?}', [HomeController::class, 'categoryProducts'])->name('category.products');
    Route::get('/all-featured/{slug}', [HomeController::class, 'allFeaturedProducts'])->name('all.featured.products');
    Route::post('/product/search', [HomeController::class, 'search'])->name('product.search');
    // Route::get('/shop', [HomeController::class, 'shopPage'])->name('shop.page');
    Route::get('/single-product/{product_slug}', [HomeController::class, 'productDetails'])->name('productdetails.page');
    Route::post('/increment', [CheckoutController::class, 'increment'])->name('increment');
    Route::post('/decrement', [CheckoutController::class, 'decrement'])->name('decrement');
    Route::post('add-to-cart', [CheckoutController::class, 'addToCart'])->name('add-to.cart');
    // Route::get('checkout', [CheckoutController::class, 'checkoutPage'])->name('checkoutpage');
    Route::get('checkout', [CheckoutController::class, 'checkoutView'])->name('checkout.view');


    Route::get('/remove-cart-item/{cart_itme_id}', [CheckoutController::class, 'removeCartItem'])->name('removecartitem');

    Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');
    Route::post('/register', [RegisterController::class, 'registerStore'])->name('register.store');

    Route::get('/login', [RegisterController::class, 'loginPage'])->name('login.page');
    Route::post('/login', [RegisterController::class, 'loginStore'])->name('login.store');

    // Route::get('/upzilla/ajax/{district_id}', [CheckoutController::class, 'loadUpazillaAjax'])->name('loadupazila.ajax');


    Route::prefix('customar/')->group(function () {
        Route::get('dashboard', [CustomarController::class, 'dashboard'])->name('customar.dashboard');
        Route::get('logout', [RegisterController::class, 'logout'])->name('customar.logout');

        // Route::post('cart/apply-coupon', [CartController::class, 'applyCoupon'])->name('customar.applycoupon');
        // Route::get('/cart/remove-coupon/{coupon_name}', [CartController::class, 'removeCoupon'])->name('customar.removecoupon');

        Route::get('checkout', [CheckoutController::class, 'checkoutPage'])->name('customar.checkoutpage');
        Route::post('placeorder', [CheckoutController::class, 'placeOrder'])->name('customar.placeorder');
    });
});

Route::prefix('admin/')->group(function () {

    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::get('order-list', [OrderController::class, 'index'])->name('admin.orderlist');
        Route::get('customar-list', [BackendCustomarController::class, 'index'])->name('admin.customarlist');

        Route::resource('category', CategoryController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('products', ProductController::class);
        Route::resource('coupon', CouponController::class);
        Route::get('shapping-charge/{id}', [ShippingChargeController::class, 'shappingChargeEdit'])->name('shapping.charge.edit');
        Route::put('shapping-charge-update/{id}', [ShippingChargeController::class, 'shappingChargeUpdate'])->name('shapping.charge.update');
    });
});
