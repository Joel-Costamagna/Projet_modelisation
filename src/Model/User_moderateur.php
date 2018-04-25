<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:26
 */

namespace User\Model;

class User_moderateur implements User {
	public function __construct($name, $prenom, $mail, $login, $password) {
		$this->name = $name;
		$this->prenom = $prenom;
		$this->email = $mail;
		$this->login = $login;
		$this->password = $password;
		//modo stuff;
	}
}
