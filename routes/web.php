<?php

use Illuminate\Support\Facades\Input;
use App\Movies;

Route::get('/', function ()
    {
        return view('welcome');
    });

Auth::routes();

Route::resource('movies', 'MoviesController');
Route::resource('producers', 'ProducersController');
Route::resource('genres', 'GenresController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'MoviesController@search')->name('movies');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin', function (){
        $movies = DB::table('movies')->get();
        $users = DB::table('users')->get();
        return view('admin', ['movies'=>$movies], ['users'=>$users]);
    });
});