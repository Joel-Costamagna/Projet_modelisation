<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:14
 */

namespace User\Model;

interface User {

	function __construct($name, $prenom, $mail, $login, $password);
}
