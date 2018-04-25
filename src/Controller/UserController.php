<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:20
 */

namespace User\Controller;

require_once('Observer/Observee.php');
require_once('Factories/UserFactory.php');
require_once('Observer/RegistrerViewValidation.php');
require_once('Observer/MailSender.php');
require_once('Observer/BDDWriterNewUser.php');

use BDDWriterNewUser;
use Db;
use Observee;
use RegistrerViewValidation;
use User\Model\User;

class UserController {
	public function __construct() {

		$database = Db::connectDb();
		$this->o = new observee; // Nous créons un nouveau gestionnaire d'erreur.
        $this->o->attach(new RegistrerViewValidation(' Votre enregistrement a bien ete pris en compte <3'));
		$this->o->attach(new BDDWriterNewUser($database));
	}

	public function create($user_type): User {
		$name = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['email'];
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
		$user = null;
		try {
			$user = \User\UserFactory::build($user_type, $name, $prenom, $mail, $pseudo, $password);
		} catch (\Exception $e) {
			echo "erreur : $e";
		}
		$this->o->register($user);
		return $user;
	}
}
