<?php 

class ipsum {
	
	// properties
	private $ipsumGenerator;
	private $ipsumText;

	// getter and setter methods
	public function setNumParagraphs ($numParagraphs) {
		$this->ipsumText = $this->ipsumGenerator->getParagraphs($numParagraphs);
	}
	public function getIpsumText () {
		return (implode('<p>', $this->ipsumText));
	}

	// constructor
	function __constructor ($numParagraphs) {
		$this->ipsumGenerator = new Badcow\LoremIpsum\Generator();
		$this->$setNumParagraphs($numParagraphs);
	}
}