<?php
/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 25/04/2018
 * Time: 14:31
 */

namespace User\Model;


class StandardDecorator extends UserDecorator
{
    private $name;

    public function Role()
    {
        $this->afficheStandard();
        $this->userDecorate->Role();
    }

    public function afficheStandard()
    {
        echo(' Utilisateur : ' . $this->name . '');
    }
}