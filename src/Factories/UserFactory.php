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
	 * @throws \Exception
	 */
	public static function build(
		string $user_type, string $name, string $prenom, string $mail, string $pseudo, string $password): User {
		$user = "User_" . strtolower($user_type);
		if ( ! file_exists($chemin = "Model/" . $user . '.php')) {
			throw new \Exception("file $chemin does not exists");
		}
		$classe = "\User\Model\\$user";
		require $chemin;
		if ( ! class_exists($classe)) {
			{
				throw new \Exception("class $classe does not exists at $chemin");
			}
		}
		/*
		if ($user_type != "standard" && self::$role_quantite[$user_type] > 10) {
			throw new \Exception("there is already 10 $user_type");
		}*/
		return new $classe($name, $prenom, $mail, $pseudo, $password);
	}
}
