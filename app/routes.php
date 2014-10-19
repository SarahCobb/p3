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
	return View::make('home');
});

Route::get('/pokeipsum', function()
{
	return View::make('pokeipsum');
});

Route::post('/pokeipsum', function()
{
	return View::make('pokeipsum');
});

Route::get('/pokepeople', function()
{
	return View::make('pokepeople');
});

Route::post('/pokepeople', function()
{
	return View::make('pokepeople');
});