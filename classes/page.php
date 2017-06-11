<?php

class page{

const PAGE_DIR = 'tpls';
const ROOT_URL = '/sunday/';

static $tpl_name = 'product_lst';

static function set_tpl($tpl_name) {
	self::$tpl_name = $tpl_name;
}
static function show() {
	self::include_tpl('layout');
}
static function get_tpl_path($tpl_name = false) {
	//���� �� ������� ��������, ������������ �������� ������������ �������� ������ self::$tpl_name
	if (!$tpl_name) $tpl_name = self::$tpl_name;
	return strlen(self::$tpl_name) ? page::PAGE_DIR.'/'.$tpl_name.'.php' : false;
}
static function include_tpl($tpl_name = false) {
	$tpl_path = self::get_tpl_path($tpl_name);
	if (file_exists($tpl_path)) 
		include($tpl_path);
	else 
		echo '<span class="err">���� ������� �� ������: "'.$tpl_path.'"</span>';
}

}