<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;

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

Route::post('/reservations', 'StaticPagesController@saveReservation');

Route::get('/confirmed', 'StaticPagesController@reservationConfirmed');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/offers', 'StaticPagesController@offers');

Route::get('/offers/thank-you', 'StaticPagesController@offersThankYou');



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
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')
->middleware('role:Admin');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')
->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')
->middleware('role:Admin');

Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')
->middleware('role:Admin');

Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')
->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')
->middleware('role:Admin');


// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')
->middleware('role:Admin');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')
->middleware('role:Admin');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')
->middleware('role:Admin');

Route::post('/admin/food-items', 'admin\FoodItemsController@store')
->middleware('role:Admin');

Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')
->middleware('role:Admin');

Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')
->middleware('role:Admin');


// Admin Customers
// Admin Members
Route::get('/admin/members', 'admin\MemberController@index');

Route::post('/admin/members', 'admin\MemberController@store');

Route::get('/admin/members/{id}/edit', 'admin\MemberController@edit');

Route::put('/admin/members/{id}', 'admin\MemberController@update');

Route::get('/admin/members/{id}/delete', 'admin\MemberController@delete');

// Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');

Route::get('/admin/reservations/{id}/edit', 'admin\ReservationController@edit');

Route::put('/admin/reservations/{id}', 'admin\ReservationController@update');

Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// Admin Settings

Route::get('/admin/settings/general', 'admin\SettingController@general')
->middleware('role:Admin');

Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral')
->middleware('role:Admin');

Route::get('/admin/settings/seo', 'admin\SettingController@seo')
->middleware('role:Admin');

Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')
->middleware('role:Admin');

Route::get('/admin/settings/social', 'admin\SettingController@social')
->middleware('role:Admin');

Route::put('/admin/settings/social', 'admin\SettingController@saveSocial')
->middleware('role:Admin');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index')
->middleware('role:Admin');

Route::get('/admin/users/create', 'admin\UsersController@create')
->middleware('role:Admin');

Route::post('/admin/users', 'admin\UsersController@store')
->middleware('role:Admin');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')
->middleware('role:Admin');

Route::put('/admin/users/{id}', 'admin\UsersController@update')
->middleware('role:Admin');

Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')
->middleware('role:Admin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservations', 'thank-you', 'confirmed', 'menu/index', 'menu/single-menu'], function ($view) {
    $generalSettings = GeneralSetting::find(1);
    $socialSettings = SocialSetting::find(1);
    $seoSettings = SeoSetting::find(1);
    
    $view->with('settings', [
        "general" => $generalSettings,
        "social" => $socialSettings,
        "seo" => $seoSettings
    ]);
});
