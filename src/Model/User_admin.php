<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:25
 */

namespace User\Model;

class User_admin implements User {

	public function __construct($name) {
		$this->name = $name;
		//TODO admmin specific stuff
	}
}
