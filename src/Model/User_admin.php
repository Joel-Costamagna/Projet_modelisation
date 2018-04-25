<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-12
 * Time: 19:25
 */

namespace User\Model;

use User\IRole;

class User_admin implements User, IRole
{

	public function __construct($name) {
		$this->name = $name;
		//TODO admmin specific stuff
	}

    public function Role()
    {
        // TODO: Implement Role() method specific standard stuff.
    }
}
