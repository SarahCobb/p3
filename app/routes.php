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
	return View::make('ipsum_request');
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
	return View::make('users_request');
});

Route::post('/users', function() {
	$numPeople = Input::get('numPeople');
	$includeBirthday = Input::get('includeBirthday');
	$includeDescription = Input::get('includeDescription');
	$faker = Faker\Factory::create();
	for ($i = 0; $i < $numPeople; $i++) {
		$people[$i]['name'] = $faker->name;
		$people[$i]['birthday'] = $faker->date($format = 'm-d-Y', $max = 'now', $min='1940');
		$people[$i]['description'] = $faker->paragraph($nbSentences = 4);
	};
	$countPeople = 0;
	return View::make('users')
		->with('people', $people)
		->with('numPeople', $numPeople)
		->with('countPeople', $countPeople)
		->with('includeBirthday', $includeBirthday)
		->with('includeDescription', $includeDescription);
});