<?php

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

Route::get('/', function () {
    return view('Home.index');
});
//admin
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class,('index')])->name('admin');
Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('login');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/register',[\App\Http\Controllers\Admin\HomeController::class,'register'])->name('register');
Route::post('admin/loginregister',[\App\Http\Controllers\Admin\HomeController::class,'registercheck'])->name('admin_loginregister');
/*
Route::middleware('auth')->group(function (){

    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin');

    Route::get('/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('login');
    Route::post('/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
    Route::get('/register',[\App\Http\Controllers\Admin\HomeController::class,'register'])->name('register');
    Route::post('/loginregister',[\App\Http\Controllers\Admin\HomeController::class,'registercheck'])->name('admin_loginregister');
});*/

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin');
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

});
Route::prefix('admin')->middleware('auth')->group(function (){
   Route::get('product',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_product');
   Route::get('product/add',[\App\Http\Controllers\Admin\ProductController::class,'add'])->name('admin_product_add');
   Route::post('product/create',[\App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_create');
   Route::get('product/edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
   Route::post('product/update/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
   Route::get('product/delete/{id}',[\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');

});
//dd('sa');
/*
Route::get('/admin/category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
Route::post('/admin/category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
Route::get('/admin/category/update',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
Route::get('/admin/category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
*/
