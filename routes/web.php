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

// Route::get('/test/{id}', function ($id) {
//     echo $id;
//     return view('first');
// });
Route::get('user_home', 'App\Http\Controllers\User@index');
Route::get('home', 'App\Http\Controllers\User@index');

Route::view('test','first');
Route::get('about', 'App\Http\Controllers\User@about');
Route::get('service', 'App\Http\Controllers\User@service');