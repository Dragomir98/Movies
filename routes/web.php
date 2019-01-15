<?php

use Illuminate\Support\Facades\Input;
use App\Movies;

//Route::get('/', 'PagesController@index');
//Route::get('/about', 'PagesController@about');
Route::get('/', function ()
    {
        return view('welcome');
    });

Auth::routes();

Route::resource('movies', 'MoviesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prod', function ()
    {
        $movies = DB::table('movies')->get();
        return view('producerList', ['movies'=>$movies]);
    });

Route::get('/gen', function ()
    {
        $movies = DB::table('movies')->get();
        return view('genreList', ['movies'=>$movies]);
    });


Route::get('/search', 'MoviesController@search')->name('movies');
