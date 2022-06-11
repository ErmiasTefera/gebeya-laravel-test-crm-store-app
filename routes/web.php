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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Users
Route::get('/users', function () {
    return view('components/pages/users');
})->middleware(['auth'])->name('users');

//Stores
Route::get('/stores', function () {
    return view('components/pages/stores');
})->middleware(['auth'])->name('stores');

//Products
Route::get('/products', function () {
    return view('components/pages/products');
})->middleware(['auth'])->name('products');

//Categories
Route::get('/categories', function () {
    return view('components/pages/categories');
})->middleware(['auth'])->name('categories');

require __DIR__.'/auth.php';
