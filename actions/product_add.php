<?php

if ($_POST) {
	var_dump($_POST);
	exit('тут должен быть функционал добавления товара');
}

page::set_tpl('product_add');

?>