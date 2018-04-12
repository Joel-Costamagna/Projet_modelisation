<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:09
 */

namespace User;

use User\Model\User;

class UserFactory {

	static private $role_quantite = [];

	/**
	 * @param string $user_type le type d'utilisateur (ex admin, moderateur, …)
	 * @param string $name      le username de l'utilisateur
	 * @return Model\User
	 * @throws \User\UserTypeException
	 * @throws \User\UserRoleException
	 */
	public static function build(string $user_type, string $name): User {
		$user = "User_" . strtolower($user_type);

		if ($user_type != "standard" && self::$role_quantite[$user_type] > 10) {
			throw new UserRoleException("there is already 10 $user_type");
		}

		if (class_exists($user)) {
			return new $user($name);
		} else {
			throw new UserTypeException("invalid user type $user_type");
		}
	}
}
