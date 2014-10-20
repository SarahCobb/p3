<?php

// array of pokemon
$pokemon = file('/Applications/MAMP/htdocs/p3/app/models/pokemon.txt');

// class ipsum
class ipsum {

	// properties
	public $ipsumText;
	public $paragraphSize;
	public $numParagraphs;

	// getter and setter methods
	public function getIpsum() {
		return $this->ipsumText;
	}
	public function setParagraphSize ($paragraphSize) {
		$this->paragraphSize = $paragraphSize;
	}
	public function setNumParagraphs ($numParagraphs) {
		$this->numParagraphs = $numParagraphs;
	}
	
	// method to create a sentence
	public function createSentence() {
		// pull 10 random pokemon names
		$sentenceArray = array_rand($pokemon, 10);
		// add spaces between words
		for ($i = 0; $i < 9; $i++) {
			$sentence = $sentenceArray[$i] . " ";
		};
		// add punctuation
		$sentence = $sentenceArray[9] . ".";
		// capitalize sentence
		$sentence = ucfirst(strtolower($sentence));
		return $sentence;
	}

	// method createParagraph, pass paragraphSize
	public function createParagraph ($paragraphSize) {
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
		for ($i = 0; $i < 5; $i++) {
			$tempSentence = createSentence();
			$paragraph = $tempSentence . " ";
		};
		return $paragraph;
	}

	// method createIpsum, pass numParagraphs
	public function createIpsum ($numParagraphs) {
		// loop through # of paragraphs
		for ($i = 0; $i < $numParagraphs; $i++) {
			// create paragraph and add to output
			$tempParagraph = createParagraph($paragraphSize);
			// concatenate with double line break
			$ipsumText = $tempParagraph . "\n" . "\n";
		};
		return $ipsumText;
	}
};

// class person
class person extends ipsum {

	// property to store name
	public $name;
	// property to store birthday
	public $birthday;
	// property to store address
	public $address;
	// property to store description
	public $description;

	// getter methods
	public function getName() {
		return $this->name;
	}
	public function getBirthday() {
		return $this->birthday;
	}
	public function getAddress() {
		return $this->address;
	}
	public function getDescription() {
		return $this->description;
	}

	// constructor to create person
	function __construct () {
		// faker creates first name
		$firstName = $faker->firstName($gender = null);
		// pull last name from pokemon list
		$lastName = array_rand($pokemon, 1);
		// combine first and last name
		$name = $firstName . " " . $lastName;
		return $name;	
	}

	// method setBirthday
	public function setBirthday () {
		// faker sets birthday
		$birthday = $faker->date($format = 'm-d-Y', $max = 'now', $min='1940');
		return $birthday;
	}

	// method setAddress
	public function setAddress () {
		// faker sets address
		$address = $faker->address;
		return $address;
	}

	// method setDescription
	public function setDescription () {
		// create sentence
		$description = createSentence();
		return $description;
	}
};