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
		$name = $_POST['name'] ?? 'Robert';
		try {
			$user = \User\UserFactory::build($user_type, $name);
			// save user in the database
			return $user;
		} catch (\Exception $e) {
			echo "erreur : $e";
		}
	}
}
