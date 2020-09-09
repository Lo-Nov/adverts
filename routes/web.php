<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ad-auth', 'AuthController@adAuth')->name('ad-auth');

//Main Dashboard
Route::get('/main', 'MainController@index')->name('main');
Route::get('/billable-items', 'MainController@billableItems')->name('billable-items');
Route::post('/billable-items', 'MainController@postBillableItems')->name('billable-items');
Route::post('/child-items', 'MainController@childItems')->name('child-items');
Route::get('/apply', 'MainController@apply')->name('apply');
//Route::post('/apply', 'MainController@postApply')->name('apply');
Route::post('/post-apply', 'MainController@postApplication')->name('post-apply');
Route::get('/get-subcategory', 'MainController@getSubcategory')->name('get-subcategory');
Route::get('/additional-price/{code}', 'MainController@additionalPrice')->name('additional-price');
Route::post('/additional-price', 'MainController@postAdditionalPrice')->name('additional-price');
Route::get('/advert-plates', 'MainController@advertPlates')->name('advert-plates');
Route::post('/get-address', 'MainController@getAddress')->name('get-address');

Route::post('get-location', 'MainController@getLocation')->name('get-location');
Route::get('add-applicant','MainController@addApplicant')->name('add-applicant');
Route::get('get-applicant','MainController@getApplicant')->name('get-applicant');
