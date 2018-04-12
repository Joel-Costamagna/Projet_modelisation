<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:09
 */

namespace User;

class UserFactory {
	/**
	 * @param string $user_type le type d'utilisateur (ex admin, moderateur, …)
	 * @param string $name      le username de l'utilisateur
	 * @return \User
	 * @throws \Exception
	 */
	public static function build(string $user_type, string $name): User {
		$user = "User_" . ucwords($user_type);
		if (class_exists($user)) {
			return new $user($name);
		} else {
			throw new UserTypeException("invalid user type $user_type");
		}
	}
}
