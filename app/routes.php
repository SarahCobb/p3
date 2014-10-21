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
	// get number of paragraphs
	$numParagraphs = Input::get('numParagraphs');
	// get paragraph size
	$paragraphSize = Input::get('paragraphSize');
	// instantiate a new ipsum object 
	$newIpsum = new ipsum($numParagraphs, $paragraphSize);
	$pokeIpsum = $newIpsum->getIpsum();
	// pass pokeIpsum text to view
	return View::make('pokeipsum')
		->with('pokeIpsum', $pokeIpsum);
});

Route::get('/pokepeople', function()
{
	return View::make('pokepeople');
});

Route::post('/pokepeople', function()
{
	// get form request data
	$numPeople = Input::get('numPeople');
	$includeAddress = Input::get('Include Address?');
	$includeBirthday = Input::get('Include Birthday?');
	$includeDescription = Input::get('Include Description?');
	// loop through number of people
	for ($i = 0; $i < $numPeople; $i++) {
		// create new person
		$pokePerson = new person($includeAddress, $includeBirthday, $includeDescription);
		// add person to people array
		$pokePeople[i] = $pokePerson;
	}
	// pass people array to view
	return View::make('pokepeople')
		->with('pokePeople', $pokePeople);
});

Route::get('/testing', function()
{

	$public = app_path();
	echo $public;


	$fruit = Array('Apples', 'Oranges', 'Pears');
    echo Pre::render($fruit,'Fruit');

    $newIpsum = new ipsum($numParagraphs, $paragraphSize);
    $pokeIpsum = getIpsum();
    echo $pokeIpsum;

	$faker = Faker::create();
    echo $faker->firstName($gender = null);
    echo $faker->address;
    echo $faker->date($format = 'm-d-Y', $max = 'now', $min='1940');
});