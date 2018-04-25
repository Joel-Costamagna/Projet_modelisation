<?php
/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 25/04/2018
 * Time: 14:29
 */

namespace User\Model;


class AdminDecorator extends UserDecorator
{
    private $name;

    public function Role()
    {
        $this->afficheAdmin();
        $this->userDecorate->Role();
    }

    public function afficheAdmin()
    {
        echo(' Admin : ' . $this->name . '');
    }
}