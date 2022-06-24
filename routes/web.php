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


Route::get('/contato', function() {
    echo "estoy em contato";
});
Route::get('/sobre', function() {
    echo "estoy em sobre";
});
Route::get('/produtos', function() {
    echo "estoy em produtos";
});
