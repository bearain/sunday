<?php if ($logged_in = session::logged_in()) { ?><a href="<?php echo page::ROOT_URL?>?action=product_add">Добавить товар</a><br/><?php } ?>
<?php if (!empty($product_lst)) foreach($product_lst as $product) { ?>
	

<?php } else { ?>
<span class="note">ожидаем поступление товаров</span>
<?php }?>