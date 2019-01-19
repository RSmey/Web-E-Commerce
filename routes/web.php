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

// Route::get('/', function () {
//     return view('pages.sport_store');
// });

Route::get('/', 'TableListController@indexPage');
//
Route::get('/show_page/men', 'TableListController@showmen');
Route::get('/show_page/shoe', 'TableListController@showshoe');
//Pages Show to User
Route::get('/detail/{id}', 'TableListController@detail');
// Route::get('/page_client', function(){
//     return view('pages.sport_store');
// });

//Route::get('/list_data', 'TableListController@editindex');

Route::get('/admin/edit/{id}', 'TableListController@edit');
Route::post('/update', 'TableListController@update');
Route::get('/admin/delete/{id}', 'TableListController@destroy');
Route::get('mainpages', function(){
    return view('pages.sidebar.sidebar');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

//Admin.....
// Route::get('/admin', 'AdminController@index')->name('admin');

Route::group(['prefix' => 'admin'], function(){

	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    //
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
    
    //Add Data
    Route::get('/add', 'TableListController@index');
    Route::post('/store', 'TableListController@store');

    //Edit Data


    //Delete Data


});