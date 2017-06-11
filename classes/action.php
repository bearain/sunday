<?php

class action {

const ACTION_DIR = 'actions';

private $action;

public function __construct() {
	$this->action = empty($_POST['action']) ? (empty($_GET['action']) ? 'index' : $_GET['action']) : $_POST['action'];
}
public function proc() {
	$action_path = $this->get_action_path();
	if (file_exists($action_path)) 
		include ($action_path);
	else
		exit('Отсутствует обработчик для этого значения параметра action="'.$this->action.'"'); 
}
private function get_action_path() {
	return self::ACTION_DIR.'/'.$this->action.'.php';
}



}