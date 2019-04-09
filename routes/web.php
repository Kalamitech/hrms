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

Route::get('/', 'PagesController@login')->name('loginIndex');

Auth::routes();

//handles login
Route::post('/loginHandler', [
    'uses' => 'LoginController@login',
    'as' => 'loginHandler',
]);

//login success routes protected by auth middleware and respective user group middleware
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin', 'PagesController@adminIndex')->name('admin')->middleware('ACheck');
    Route::get('/manager', 'PagesController@managerIndex')->name('manager')->middleware('MCheck');
    Route::get('/home', 'PagesController@homeIndex')->name('home')->middleware('GECheck');
});

//admin routes protected by admin middleware
//manager routes protected by admin middleware
//general employee routes protected by admin middleware
