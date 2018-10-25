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
    return view('welcome');
});

Route::get('restaurants','RestaurantsController@index');

Route::get('restaurants/add','RestaurantsController@add')->name('restaurants-add');

Route::post('restaurants/post','RestaurantsController@store')->name('restaurants-post');

Route::get('foods/add','RestaurantsController@foodAdd');

Route::post('foods/post','RestaurantsController@foodStore')->name('food-add');

Route::get('menus/add','RestaurantsController@menuAdd');

Route::post('menus/post','RestaurantsController@menuPost')->name('menu-post');