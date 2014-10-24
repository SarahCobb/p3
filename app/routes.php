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

Route::get('/ipsum', function() {
	return View::make('ipsum');
});

Route::post('/ipsum', function() {
	$numParagraphs = Input::get('numParagraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numParagraphs);
	$countParagraphs = 0;
	return View::make('ipsum')
		->with('paragraphs', $paragraphs)
		->with('numParagraphs', $numParagraphs)
		->with('countParagraphs', $countParagraphs);
});

Route::get('/users', function() {
	return View::make('users');
});

Route::post('/users', function() {
	$numPeople = Input::get('numPeople');
	$includeBirthday = Input::get('includeBirthday');
	$includeAddress = Input::get('includeAddress');
	$includeFavColor = Input::get('includeFavColor');
	$faker = Faker\Factory::create();
	for ($i = 0; $i < $numPeople; $i++) {
		$people[$i]['firstName'] = $faker->firstName($gender = null);
		$people[$i]['lastName'] = $faker->lastName;
		$people[$i]['emailDomain'] = $faker->freeEmailDomain;
		$people[$i]['birthday'] = $faker->date($format = 'm-d-Y', $max = 'now', $min='1940');
		$people[$i]['address'] = $faker->address;
		$people[$i]['favColor'] = $faker->safeColorName;
		$people[$i]['description'] = $faker->paragraph($nbSentences = 2);
	};
	$countPeople = 0;
	return View::make('users')
		->with('people', $people)
		->with('numPeople', $numPeople)
		->with('countPeople', $countPeople)
		->with('includeBirthday', $includeBirthday)
		->with('includeAddress', $includeAddress)
		->with('includeFavColor', $includeFavColor);
});