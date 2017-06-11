<?php

class product{

const PRODUCT_DIR = 'products';

public function get_lst() {
	$path = $this->get_product_path();

	$lst = scandir($path);
	$lst_clear = array();
	foreach($lst as $k=>$v) {
		if ($v != '.' && $v != '..') $lst_clear[] = $v;
	}
	return $lst_clear;
}
private function get_product_path() {
	return realpath(__DIR__.'/../'.self::PRODUCT_DIR);
}


}