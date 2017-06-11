<?php

const ROOT_URL = '/sunday/';

include_class('page', 'action', 'session');

session::start();

$action = new action();
$action->proc();

page::show();

function include_class() {
	$args = func_get_args();
	foreach($args as $cls) require('classes/'.$cls.'.php');
}
?>