<?php

/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 13/04/2018
 * Time: 14:19
 */

namespace User\Model;

abstract class UserDecorator implements IRole {
	protected $userDecorate;

	public function __construct(IRole $decorate) {
		$this->userDecorate = $decorate;
	}

	public function Role() {
		$this->userDecorate->Role();
	}


}
