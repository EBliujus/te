<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController as CC;
use App\Http\Controllers\ProductController as PC;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('cats')->name('cats-')->group(function () {
    Route::get('/', [CC::class, 'index'])->name('index');
    Route::get('/create', [CC::class, 'create'])->name('create');
    Route::post('/create', [CC::class, 'store'])->name('store');
    Route::get('/edit/{cat}', [CC::class, 'edit'])->name('edit');
    Route::put('/edit/{cat}', [CC::class, 'update'])->name('update');
    Route::delete('/delete/{cat}', [CC::class, 'destroy'])->name('delete');
});

Route::prefix('products')->name('products-')->group(function () {
    Route::get('/', [PC::class, 'index'])->name('index');
    Route::get('/create', [PC::class, 'create'])->name('create');
    Route::post('/create', [PC::class, 'store'])->name('store');
    Route::get('/edit/{product}', [PC::class, 'edit'])->name('edit');
    Route::put('/edit/{product}', [PC::class, 'update'])->name('update');
    Route::delete('/delete/{product}', [PC::class, 'destroy'])->name('delete');
    ROute::get('show/{product}', [PC::class, 'show'])->name('show');
});