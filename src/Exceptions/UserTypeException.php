<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:28
 */

namespace User;

use Exception;

class UserTypeException extends Exception {

	public function __construct($message, $code = 0, Exception $previous = null) {


		parent::__construct($message, $code, $previous);
	}

	// chaîne personnalisée représentant l'objet
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}
