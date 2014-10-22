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

/* Route::get('/pokeipsum', function()
{
	return View::make('pokeipsum');
});

Route::post('/pokeipsumresult', function()
{
	// globals

	
	$updatedSentence = '';
	// function to create a sentence
	function createSentence() {
		// pull 10 random pokemon names
		$sentence = '';
		$pokemon = array('Pidgey','Pidgeotto','Pidgeot','Rattata,','Raticate','Spearow','Fearow','Ekans','Arbok','Pikachu','Raichu');
		// add spaces between words
		for ($i = 0; $i < 9; $i++) {
			# extract new word from array
			$word = $pokemon[rand(0, count($pokemon) - 1)];
			if ($sentence == '') {
				$updatedSentence = $word;
				$sentence = str_replace($sentence, $sentence, $updatedSentence);
			} else {
				$updatedSentence = $sentence . ' ' . $word;
			}
			# update sentence
			$sentence = str_replace($sentence, $sentence, $updatedSentence);
		}
		// add punctuation
		$lastWord = $pokemon[rand(0, count($pokemon) - 1)] . ".";
		$sentence = str_replace($sentence, $sentence, $lastWord);
		// capitalize sentence
		$sentence = ucfirst(strtolower($sentence));
		return $sentence;
	}

	// method createParagraph, pass paragraphSize
	function createParagraph ($paragraphSize) {
		// if paragraphSize = small, create 5 sentences
		if ($paragraphSize == 'small') {
			$numSentences = 5;
		// if paragraphSize = medium, create 10 sentences
		} elseif ($paragraphSize == 'medium') {
			$numSentences = 10;
		// if paragraphSize = large, create 15 sentences
		} else {
			$numSentences = 15;
		};
		// create paragraph
		for ($i = 0; $i < $numSentences; $i++) {
			$tempSentence = createSentence();
			if ($paragraph = '') {
				$updatedParagraph = $tempSentence;
				$paragraph = str_replace($paragraph, $paragraph, $tempSentence);
			} else {
				$updatedParagraph = ' ' . $tempSentence;
				$paragraph = str_replace($paragraph, $paragraph, $tempSentence);	
			};
		};
	}

	// method createIpsum, pass numParagraphs
	function createPokeIpsum ($numParagraphs, $paragraphSize) {
		// loop through # of paragraphs
		for ($i = 0; $i < $numParagraphs; $i++) {
			// create paragraph and add to output
			$tempParagraph = createParagraph($paragraphSize);
			// concatenate with double line break
			if ($ipsumText = '') {
				$updatedText = $tempParagraph;
				$ipsumText = str_replace($ipsumText, $ipsumText, $tempParagraph);
			} else {
				$updatedText = $tempParagraph . "\n" . "\n";
				$ipsumText = str_replace($ipsumText, $ipsumText, $tempParagraph);
			};
		};
		return $ipsumText;
	}




	// instantiate a new ipsum object 
	//$newIpsum = new ipsum($numParagraphs, $paragraphSize);
	//$pokeIpsum = $newIpsum->getIpsum();
	// pass pokeIpsum text to view
	//testing
	//$sent = $newIpsum->createSentence();
	//echo Pre::render($sent, 'sent');
	//echo Pre::render($pokeIpsum,'pokeIpsum');
	//echo Pre::render($newIpsum,'newIpsum');


	// get number of paragraphs
	$numParagraphs = Input::get('numParagraphs');
	// get paragraph size
	$paragraphSize = Input::get('paragraphSize');
	$pokeIpsum = createPokeIpsum($numParagraphs, $paragraphSize);
	Pre::render('pokeIpsum', $pokeIpsum);
	return View::make('pokeIpsum')
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
	echo Pre::render($pokePeople,'pokePeople');
	return View::make('pokepeople')
		->with('pokePeople', $pokePeople);
});
*/

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

Route::get('/ipsum', function() {
	return View::make('ipsum_request');
});

Route::post('/ipsum', function() {
	$numParagraphs = Input::get('numParagraphs');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numParagraphs);
	$output = implode('<p>', $paragraphs);
	return View::make('ipsum')
		->with('output', $output);
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
	$count = 0;
	return View::make('users')
		->with('people', $people)
		->with('numPeople', $numPeople)
		->with('count', $count)
		->with('includeBirthday', $includeBirthday)
		->with('includeDescription', $includeDescription);
});