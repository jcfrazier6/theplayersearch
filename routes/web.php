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

Route::get('/', function () {
    return view('landing.landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'player'], function () {
  Route::get('/login', 'PlayerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PlayerAuth\LoginController@login');
  Route::post('/logout', 'PlayerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PlayerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PlayerAuth\RegisterController@register');

  Route::post('/password/email', 'PlayerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PlayerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PlayerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PlayerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'coach'], function () {
  Route::get('/login', 'CoachAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CoachAuth\LoginController@login');
  Route::post('/logout', 'CoachAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CoachAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CoachAuth\RegisterController@register');

  Route::post('/password/email', 'CoachAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CoachAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CoachAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CoachAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'organization'], function () {
  Route::get('/login', 'OrganizationAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'OrganizationAuth\LoginController@login');
  Route::post('/logout', 'OrganizationAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'OrganizationAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'OrganizationAuth\RegisterController@register');

  Route::post('/password/email', 'OrganizationAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'OrganizationAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'OrganizationAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'OrganizationAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'parental'], function () {
  Route::get('/login', 'ParentalAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ParentalAuth\LoginController@login');
  Route::post('/logout', 'ParentalAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ParentalAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ParentalAuth\RegisterController@register');

  Route::post('/password/email', 'ParentalAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ParentalAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ParentalAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ParentalAuth\ResetPasswordController@showResetForm');
});
