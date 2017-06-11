<?php if(!($logged_in = session::logged_in())) {?>
<form method="post" action="<?php echo ROOT_URL ?>?action=sign_in">
<input type="text" name="login" size="12">
<input type="password" name="password" size="12">
<input type="submit" value="Войти">
</form>
<?php } else { ?>
Авторизован как <?php echo $logged_in ?>&nbsp;<a href="<?php echo ROOT_URL ?>?action=sign_out">Выйти</a>
<?php } ?><hr/>
