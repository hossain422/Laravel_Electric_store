<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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


//__Admin Part__//
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::view('/dashboard', 'admin.dashboard');
        //__category__//
        Route::get('/category', [AdminCategoryController::class, 'index']);
        Route::post('/store_category', [AdminCategoryController::class, 'store']);
        Route::post('/update_category', [AdminCategoryController::class, 'update']);
        Route::get('/delete_category', [AdminCategoryController::class, 'delete']);
        Route::get('/active_category', [AdminCategoryController::class, 'active']);
        Route::get('/inactive_category', [AdminCategoryController::class, 'inactive']);
        //__sub Category__//
        Route::get('/sub_category', [AdminCategoryController::class, 'sub_category']);
        Route::post('/store_sub_category', [AdminCategoryController::class, 'store_sub_category']);
        Route::post('/update_sub_category', [AdminCategoryController::class, 'update_sub_category']);
        Route::get('/delete_sub_category', [AdminCategoryController::class, 'delete_sub_category']);
        Route::get('/active_sub_category', [AdminCategoryController::class, 'active_sub_category']);
        Route::get('/inactive_sub_category', [AdminCategoryController::class, 'inactive_sub_category']);
        //__Brand__//
        Route::get('/brand', [BrandController::class, 'index']);
        Route::post('/store_brand', [BrandController::class, 'store']);
        Route::post('/update_brand', [BrandController::class, 'update']);
        Route::get('/delete_brand', [BrandController::class, 'delete']);
        Route::get('/active_brand', [BrandController::class, 'active']);
        Route::get('/inactive_brand', [BrandController::class, 'inactive']);
        //__Product__//
        Route::get('/product', [ProductController::class, 'index']);
        Route::post('/store_product', [ProductController::class, 'store']);
        Route::post('/update_product', [ProductController::class, 'update']);
        Route::get('/delete_product', [ProductController::class, 'delete']);
        Route::get('/active_product', [ProductController::class, 'active']);
        Route::get('/inactive_product', [ProductController::class, 'inactive']);

        Route::view('/order', 'admin.order');

    });
});