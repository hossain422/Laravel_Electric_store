<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


//__Socialite__//
Route::get('login/{provider}/redirect', [SocialiteController::class, 'redirect']);
Route::get('login/{provider}/callback', [SocialiteController::class, 'callback']);

//__End Socialite__//

// Route::view('checkout', 'checkout');
// Route::view('shop', 'shop');
Route::view('product_details', 'product_details');
Route::view('contact', 'contact');
Route::view('wishlist', 'wishlist');
Route::view('profile', 'profile');
// Route::view('order', 'order');
// Route::view('order_details', 'order_details');

//__ Home Page__//
Route::get('/', [ProductController::class, 'index']);
Route::get('product_details/{id}', [ProductController::class, 'product_details']);
Route::get('shop', [ProductController::class, 'shop']);
Route::get('brand/{id}', [ProductController::class, 'brand']);
Route::get('category/{id}', [ProductController::class, 'category']);
Route::get('product_filter', [ProductController::class, 'product_filter']);
Route::get('sortBy', [ProductController::class, 'sortBy']);
Route::get('search', [ProductController::class, 'search']);
Route::get('home_category', [ProductController::class, 'home_category']);

//__Cart__//
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/add_cart', [CartController::class, 'add_cart'])->middleware('auth');
    Route::get('/delete_cart', [CartController::class, 'delete_cart']);
    Route::get('/update_cart', [CartController::class, 'update_cart']);
    // Payment
    Route::get('/payment',[PaymentController::class, 'index']);
    Route::post('/success',[PaymentController::class,'success'])->name('success');
    Route::post('/fail',[PaymentController::class,'fail'])->name('fail');
    // Order place
    Route::get('checkout', [OrderController::class, 'checkout']);
    Route::post('place_order', [OrderController::class, 'place_order']);
    Route::get('/order',[OrderController::class,'order']);
    Route::get('/order_details/{id}',[OrderController::class,'order_details']);
    Route::get('/dashboard',[OrderController::class,'dashboard']);
    Route::get('/invoice_download/{id}',[OrderController::class,'invoice_download']);

    

});

    