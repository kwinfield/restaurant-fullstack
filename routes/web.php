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

// Admin Food Catagories
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Authentication
Route::get('admin/register', function () {
    return view('auth/register');
});

Route::get('admin/login', function () {
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


// Admin Customers
Route::get('/admin/customers/offers-members', 'admin\CustomersController@allOffersMembers');

Route::get('/admin/customers/reservations', 'admin\CustomersController@allReservations');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
