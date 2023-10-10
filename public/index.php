<?php

require '../vendor/autoload.php';

use app\classes\Crud;
use app\classes\Login;

$login = new Login;
$crud = new Crud;

$login->email = 'luc@luc.luc';
$login->password = 'luc123';

// echo $login->auth();

echo $crud->read();



