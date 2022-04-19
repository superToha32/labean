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
    return view('home');
})->name('home');

Route::get('/sell', function () {
    return view('sell');
})->name('sell');

Route::get('/buy', [\App\Http\Controllers\ItemsController::class, 'getSellItems'])->name('buy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/sell', [\App\Http\Controllers\ItemsController::class, 'getBuyItems']) -> name('sell');

Route::get('/sell/new', function () {
    return view('newbuyorder');
})->middleware('auth');

Route::post('/sell/new', [\App\Http\Controllers\ItemsController::class, 'storeBuy'])->middleware('auth');

Route::get('/sell/view/{id}', [\App\Http\Controllers\ItemsController::class, 'openRequestSell']);

Route::post('filters', [\App\Http\Controllers\ItemsController::class, 'setFilters']);

Route::get('/buy/new', function () {
    return view('newsellorder');
})->middleware('auth');

Route::post('/buy/new', [\App\Http\Controllers\ItemsController::class, 'storeSell'])->middleware('auth');


require __DIR__.'/auth.php';
