<?php

require('classes/page.php');
require('classes/action.php');
require('classes/session.php');

session::start();

$action = new action();
$action->proc();

page::show();


?>