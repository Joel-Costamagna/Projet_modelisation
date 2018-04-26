<?php
/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 25/04/2018
 * Time: 14:31
 */

namespace User\Model;

require('UserDecorator.php');

class StandardDecorator extends UserDecorator {
	private $name;

	public function __construct(User_standard $decorate) {
		$this->name = $decorate->name;
		parent::__construct($decorate);
	}

	public function Role() {
		$this->userDecorate->Role();
		$this->afficheStandard();
	}

	public function afficheStandard() {
		echo(' Utilisateur pour ' . $this->name . '');
	}


}
