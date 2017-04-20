<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', [
    
    'uses' => 'UserController@getWelcome',
    'as' => 'home'
]);

Route::get('/register', function(){
    return view('register');
});

Route::post('/signup',[

    'uses'=>'UserController@userSignUp',
    'as' => 'signup'

]);

Route::get('/dashboard',[
    
	'uses' => 'PostController@getDashboard',
	'as' => 'dashboard',
      'middleware'=> 'auth'


]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'

]);

Route::get('/login', function(){
    return view ('login');

});

Route::post('/signin',[

    'uses'=>'UserController@postSignin',
    'as' => 'signin'

]);


Route::post('/createpost',[

    'uses' => 'PostController@postCreatePost',
    'middleware' => 'auth'

]);
      
Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);

Route::post('/edit', [
        'uses' => 'PostController@postEditPost',
        'as' => 'edit'
]);