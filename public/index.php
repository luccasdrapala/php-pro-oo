<?php

require '../vendor/autoload.php';

use app\classes\Crud;
use app\classes\Login;

$user = ['name' => 'Luccas', 'email' => 'luccasdrapala@gmail.com'];

$userObj = (object) $user;

echo '<pre>';
    var_dump($userObj->name);
echo '<pre/><br>';

$stdClass = new stdClass;

$stdClass->name = "Satanas";

echo '<pre>';
    var_dump($stdClass);
echo '<pre/><br>';
