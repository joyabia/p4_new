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

// Authentication routes...
Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');


// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@getLogout');

//serve the attendance sign-in sign-out form
Route::get('/signattendance', 'AttendanceController@create');

//submit attendance form to update database
Route::post('/submitattendance', 'AttendanceController@store');

Route::get('/confirm-login-worked', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    
    
   

    if($user) {
        echo 'You are logged in.';
        echo $user;
        foreach($user->kids as $kid){
        	echo $kid->firstname;
        	echo"---------------------";
        }
    } else {
        echo 'You are not logged in.';
    }

    return;

});

