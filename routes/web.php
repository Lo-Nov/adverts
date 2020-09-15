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
Route::post('save-applicant','MainController@saveApplicant')->name('save-applicant');

Route::post('get-demo', 'MainController@getDemo')->name('get-demo');

//applications
Route::get('get-applications','MainController@getApplications')->name('get-applications');
Route::post('update-status','MainController@updateStatus')->name('update-status');
Route::post('pay-advert-bill', 'MainController@payAdvertBill')->name('pay-advert-bill');
Route::get('get-advert-receipt/{id}', 'MainController@getAdvertReceipt')->name('get-advert-receipt');
Route::get('adverts-printables/{id}', 'MainController@advertsPrints')->name('adverts-printables');
Route::get('print-advert-bill/{billNo}', 'MainController@printAdvertBill')->name('print-advert-bill');
Route::post('get-advert-receipt','MainController@AdvertReceipt')->name('get-advert-receipt');
Route::get('get-received','MainController@getReceivedApplications')->name('get-received');
Route::post('save-plate-assignment','MainController@savePlateAssignment')->name('save-plate-assignment');
Route::get('assigned-plates','MainController@getAssignedPlates')->name('assigned-plates');
Route::get('get-assigned/{plate}','MainController@getAssigned')->name('get-assigned');
Route::get('get-statuses','MainController@getStatuses')->name('get-statuses');
Route::post('add-status','MainController@addStatus')->name('add-status');
Route::post('change-status','MainController@changeStatus')->name('change-status');
Route::post('delete-status','MainController@deleteStatus')->name('delete-status');



