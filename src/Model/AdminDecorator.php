<?php
/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 25/04/2018
 * Time: 14:29
 */

namespace User\Model;

require('UserDecorator.php');

class AdminDecorator extends UserDecorator {
	private $name;

	public function __construct(User_admin $decorate) {
		$this->name = $decorate->name;
		parent::__construct($decorate);
	}

	public function Role() {
		$this->userDecorate->Role();
		$this->afficheAdmin();
	}

	public function afficheAdmin() {
		echo(' Admin pour ' . $this->name . '<br/>');
	}
}
