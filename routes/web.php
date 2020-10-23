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

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth:sanctum']
], function () {

    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function () {
        
        Route::view('/', 'admin.products.index')->name('index');
        Route::view('/create', 'admin.products.create')->name('create');

    });
});
