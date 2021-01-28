<?php

require_once ('bootstrap/bootstrap.php');

use App\Adapter\Notification;

//Adapter example
$notify = new Notification('username', 'password');
$notify->send('17035551212', '15125551212', 'body of the message');