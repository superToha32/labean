<?php

use Illuminate\Support\Facades\Route;

use App\Models\Item;

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
});

Route::get('/sell', [\App\Http\Controllers\ItemController::class, 'getSellItems']);

Route::get('/sell/{id}', [\App\Http\Controllers\ItemController::class, 'openRequestSell']);

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/support', function () {
    return view('support');
});
