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

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

// Admin Dashboard
Route::get('/app', function () {
    return view('test');
});

// Admin Food Categories
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Authentication
Route::get('admin/register', function () {
    return view('auth/register');
});

Route::get('admin/login', function () {
    return view('admin/login');
});

// Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');

Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');

Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');


// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

Route::post('/admin/food-items', 'admin\FoodItemsController@store');

Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');

Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');


// Admin Customers
// Admin Members
Route::get('/admin/members', 'admin\MemberController@index');

// Admin Reservations
Route::get('/admin/members/reservations', 'admin\MemberController@allReservations');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');

Route::put('/admin/users/{id}', 'admin\UsersController@update');

Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
