<?php
/**
 * Created by PhpStorm.
 * User: joelcostamagna
 * Date: 2018-04-25
 * Time: 14:49
 */
require_once('Controller/UserController.php');
$userController = new \User\Controller\UserController;
$user = $userController->create("standard");
