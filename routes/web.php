<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Route::get('/',[ProductController::class,'index'])->middleware('auth')->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->middleware('auth')->name('product.create');
Route::post('/product',[ProductController::class,'store'])->middleware('auth')->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class,'edit'])->middleware('auth')->name('product.edit');
Route::put('/product/{product}/update',[ProductController::class,'update'])->middleware('auth')->name('product.update');
Route::delete('/product/{product}/destroy',[ProductController::class,'destroy'])->middleware('auth')->name('product.destroy');
Route::resource('/empleado', EmpleadoController::class)->middleware('auth');
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
});