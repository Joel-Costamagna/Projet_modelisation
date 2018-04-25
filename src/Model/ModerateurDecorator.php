<?php
/**
 * Created by PhpStorm.
 * User: NathanVoizeux
 * Date: 25/04/2018
 * Time: 14:31
 */

namespace User\Model;


class ModerateurDecorator extends UserDecorator
{
    private $name;

    public function Role()
    {
        $this->afficheModo();
        $this->userDecorate->Role();
    }

    public function afficheModo()
    {
        echo(' Modérateur : ' . $this->name . '');
    }
}