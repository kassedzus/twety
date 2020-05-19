<?php

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

Route::middleware('auth')->group(function () {
    Route::post('/tweets', 'TweetsController@store');
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/profiles/{user}/follow', 'FollowsController@store');
    Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
    Route::patch('/profiles/{user}', 'ProfilesController@update');
});

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Route::get('/explore', 'ExploreController@index');

// Route::get('/register', function () {
//     return view('auth.register');
// });
// Route::get('/login', function () {
//     return view('auth.login');
// });