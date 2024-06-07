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
//     return view('welcome');
// });

Route::resource('homepage', 'homepagecontroller');
Route::resource('vcategory', 'vcategorycontoller');
Route::resource('videoplay', 'videoplaycontroller');

Auth::routes();

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('adminlogin');

Route::get('admin/logout', 'Auth\AdminLoginController@showLogoutForm');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('adminlogout');

route::group(['middleware' => 'auth:admin'], function () {

    Route::resource('admindashboard', 'admindashboardcontroller');
    Route::resource('admincategory', 'admincategorycontroller');
    Route::resource('usermanage', 'usermanagecontroller');
    Route::resource('adminfeedback', 'adminfeedbackscontroller');

});

Route::redirect('/', '/login');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('crud', 'CrudsController');
    Route::resource('category', 'categorycontroller');
    Route::resource('video', 'videocontroller');
    Route::resource('like', 'likescontroller');
    Route::resource('comment', 'commentscontroller');
    Route::resource('feedback', 'feedbackcontroller');
    Route::resource('userprofile', 'profilecontroller');
    Route::get('profile', 'profilecontroller@index')->name('index');
    Route::get('profile', 'profilecontroller@profile')->name('profile');
    Route::post('profile', 'profilecontroller@update_avatar')->name('update_avatar');
    Route::resource('playlists', 'playlistscontroller');
    Route::resource('favourites', 'favouritecontroller');

    Route::get('/home', 'HomeController@index')->name('home');

});
