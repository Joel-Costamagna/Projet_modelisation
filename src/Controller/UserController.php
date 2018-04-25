<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:20
 */

namespace User\Controller;

use User\Model\User;

class UserController {

	public function create($user_type): User {
		$name = $_POST['nom'] ?? 'Robert';
		$prenom = $_POST['prenom'];
		$mail=$_POST['email'];
		$pseudo=$_POST['pseudo'];
		$password = $_POST['password'];
		try {
			$user = \User\UserFactory::build($user_type, $name, $prenom, $mail, $pseudo, $password);

			return $user;
		} catch (\Exception $e) {
			echo "erreur : $e";
		}
	}
}
