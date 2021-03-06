<?php

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
    return view('index');
});


Route::get('/shop', function () {
    return view('shop');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/brew', function () {
    return view('aom');
});

Route::post('/payment/make','PaymentsController@make')->name('payment.make');
Route::get('/transaction/{id}', 'PaymentsController@transaction')->name('payment.transaction');


