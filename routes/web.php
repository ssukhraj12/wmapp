<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/settings/all',[SettingController::class,'allSettings'])->name('settings.all');
Route::get('/settings/general',[SettingController::class,'generalSettings'])->name('settings.general');
Route::get('/settings/channels',[SettingController::class,'allChannels'])->name('settings.channels');
Route::get('api/brands',[BrandController::class,'brands'])->name('brands.all');
Route::post('api/brand/add',[BrandController::class,'addBrand'])->name('brand.add');

Route::get('/productslist',[ProductController::class,'allProducts'])->name('product.list');
Route::get('/product/add',[ProductController::class,'addProduct'])->name('product.add');
