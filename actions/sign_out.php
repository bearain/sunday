<?php
session::sign_out();

Header('Location: '.ROOT_URL);
exit;

?>