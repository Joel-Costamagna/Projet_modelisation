<?php


/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 13/04/2018
 * Time: 14:19
 */

namespace User\Model;

use User\IRole;

abstract class UserDecorator implements IRole
{
    protected $userDecorate = null;

    public function __construct(IRole $decorate)
    {
        $this->userDecorate = $decorate;
    }

    abstract function Role();


}