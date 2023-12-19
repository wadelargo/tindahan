<?php
use App\Http\Controllers\HomeController;


use App\Http\Controllers\SalerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/salers', [SalerController::class, 'index'])->name('salers');
Route::get('/salers/create', [SalerController::class, 'create'])->name('salers');
Route::post('/salers/create', [SalerController::class, 'store'])->name('salers');
Route::get('/salers/{saler}', [SalerController::class, 'edit']);
Route::post('/salers/{saler}', [SalerController::class, 'update']);
Route::delete('/salers/delete/{saler}', [SalerController::class, 'delete']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products');
Route::post('/products/create', [ProductController::class, 'store'])->name('products');
Route::get('/products/{product}', [ProductController::class, 'edit']);
Route::post('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/delete/{product}', [ProductController::class, 'delete']);

Route::get('/sales', [SaleController::class, 'index'])->name('sales');
Route::get('/sales/create', [SaleController::class, 'create'])->name('sales');
Route::post('/sales/create', [SaleController::class, 'store'])->name('sales');
Route::get('/sales/{sale}', [SaleController::class, 'edit']);
Route::post('/sales/{sale}', [SaleController::class, 'update']);
Route::delete('/sales/delete/{sale}', [SaleController::class, 'delete']);
