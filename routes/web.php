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



Auth::routes();
Route::get('/dashboard','DashboardController@index');
//Route::get('/home', 'HomeController@index')->name('home');

// OAuth Routes
 Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
 Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

//Ajax call for image upload and then return success response
Route::post('upload-image','DealController@imageUpload');
Route::get('delete-image','DealController@imageDelete');


 //Front End
Route::get('/','DealController@index');
 Route::get('/deal/submit','DealController@dealSubmitForm')->name('deals.submit');
Route::post('/deal/submit','DealController@storeDealData')->name('submit.deal-data');
 Route::get('/fetch/images','DealController@fetchData');
 Route::get('/deal/description/{deal}','DealController@show')->name('deal.description');

 //deal like
 Route::get('/deal/like/{deal}','DealController@dealLike')->name('deal.like');	
