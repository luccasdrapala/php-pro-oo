<?php

use app\classes\Login;

require '../helpers/autoload.php';
require '../app/classes/Login.php';

$login = new Login;
$login->email = 'luc@luc.luc';
$login->password = 'luc123';

echo $login->auth();



