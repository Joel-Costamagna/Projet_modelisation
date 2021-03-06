<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:26
 */

namespace User\Model;

use User\IRole;

require('IRole.php');
require('User.php');
require('ModerateurDecorator.php');


class User_moderateur implements User, IRole {

	public function __construct($name, $prenom, $mail, $login, $password) {
		$this->name = $name;
		$this->prenom = $prenom;
		$this->email = $mail;
		$this->login = $login;
		$this->password = $password;
		//modo stuff;
		$role = new ModerateurDecorator($this);
		$role->Role();
	}

	public function Role() {
		echo "  Ajout du rôle : ";
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @return mixed
	 */
	public function getPrenom() {
		return $this->prenom;
	}
}
