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
	// array of pokemon
	// loop through # of people
		// 
	return View::make('pokepeople');
});

Route::get('/testing', function()
{
	$public = app_path();
	echo $public;


	$fruit = Array('Apples', 'Oranges', 'Pears');
    echo Pre::render($fruit,'Fruit');

	$faker = Faker::create();
    echo $faker->firstName($gender = null);
    echo $faker->address;
    echo $faker->date($format = 'm-d-Y', $max = 'now', $min='1940');
});