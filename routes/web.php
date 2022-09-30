<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcatController;
use App\Http\Controllers\ordertwoController;
// ----------------Admin Panel-----------------------

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('login',[AdminLoginController::class,'adminlogin'])->name('login');
Route::post('adminlogin',[AdminLoginController::class,'logincheck'])->name('adminlogin');
Route::get('logout',[AdminLoginController::class,'logout'])->name('logout');
Route::get('change-password', [AdminLoginController::class, 'changePassword'])->name('change.password.form');
Route::post('change-password', [AdminLoginController::class, 'changPasswordStore'])->name('change.password');
Route::resource('cat',CategorieController::class)->middleware('auth');
Route::resource('order',OrderController::class)->middleware('auth');
Route::resource('product',ProductController::class)->middleware('auth');
Route::resource('childcategory',SubcatController::class)->middleware('auth');
Route::resource('buyitem',ordertwoController::class)->middleware('auth');