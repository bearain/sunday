<?php

class session{

const LOGIN = 'admin';
const PASSWORD = 'admin';

static function start() {
	if (session_id() == '') session_start();
	return self::logged_in();
}
static function logged_in() {
	if (!empty($_SESSION['logged_in'])) return $_SESSION['logged_in'];
	else return false;
}

static function sign_in($login, $password) {
	if ($login == self::LOGIN && $password == self::PASSWORD) {
		$_SESSION['logged_in'] = self::LOGIN;
		return self::LOGIN;
	}
	return false;
}
static function sign_out() {
	unset($_SESSION['logged_in']);
	return false;
}

}