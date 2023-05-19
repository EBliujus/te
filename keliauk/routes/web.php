<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController as CC;

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
