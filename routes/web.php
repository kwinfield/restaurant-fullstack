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
// Static Pages
Route::get('/', 'StaticPagesController@home');

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');

Route::get('/about', 'StaticPagesController@about');

Route::get('/waitlist', 'StaticPagesController@waitlist');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

// Admin Dashboard
Route::get('/app', function () {
    return view('test');
});

// Admin Food Catagories
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Authentication
Route::get('/register', function () {
    return view('admin/register');
});

Route::get('/login', function () {
    return view('admin/login');
});

// Admin Food Catagories
Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/food-catagories', 'admin\FoodCatagoriesController@index');

Route::get('/admin/food-catagories/create', 'admin\FoodCatagoriesController@create');

Route::get('/admin/food-catagories/{id}/edit', 'admin\FoodCatagoriesController@edit');

Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');


