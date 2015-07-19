<?php

Route::get('/', 'ArticlesController@index');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

//articles
Route::resource('articles' , 'ArticlesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

Route::get('foo', ['middleware' => 'manager' , function(){

    return 'this page is for managers onky';
}]);