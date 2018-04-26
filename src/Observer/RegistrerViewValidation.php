<?php

class RegistrerViewValidation implements SplObserver {
	private $text;

	public function __construct($text) {
		$this->text = $text;
	}

	public function update(SplSubject $obj) {
		echo $this->text;
	}
}
