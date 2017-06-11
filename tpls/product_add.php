<form action="<?php echo page::ROOT_URL?>?action=product_add" method="post">
Артикул:<br/>
<input type="text" name="id" size="5"><br/>
	
Название:<br/>
<input type="text" name="name"><br/>
	
Цена:<br/>
<input type="text" name="price" size="5"><br/>
	
Описание:<br/>
<textarea name="dsc" rows="5" cols="40"></textarea><br/>

<input type="submit" value="Добавить">
</form>