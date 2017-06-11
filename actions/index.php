<?php

if (session::logged_in()) {
	include ('classes/product.php');

	$product = new product();
	$product_lst = $product->get_lst();

	$tpl_name = 'product_lst';
}