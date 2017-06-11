<?php
if ($_POST) {
	$logged_in = session::sign_in($_POST['login'], $_POST['password']);
	Header('Location: '.ROOT_URL);
	exit;
}


?>