<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('/artists');
});

Route::get('/artists', 'TaskController@showArtists');

Route::get('/artist/{id}', 'TaskController@getArtist');

Route::get('/album/{id}', 'TaskController@getAlbum');

Route::get('/track/{id}', 'TaskController@getTrack');