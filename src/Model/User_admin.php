<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:25
 */

namespace User\Model;

include_once('Observer/Observee.php');
include_once('Observer/user.php');
include_once('Observer/RegistrerViewValidation.php');
include_once('Observer/MailSender.php');
include_once('Observer/BDDWriterNewUser.php');

class User_admin implements User {


	public function __construct($name, $prenom, $mail, $login, $password) {
		$o = new observee; // Nous créons un nouveau gestionnaire d'erreur.

		$o->attach(new RegistrerViewValidation('TEST DE MERDE'));
		$this->name = $name;
		$this->prenom = $prenom;
		$this->email = $mail;
		$this->login = $login;
		$this->password = $password;
		//admin stuff;
	}
}
