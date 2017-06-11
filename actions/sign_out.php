<?php
session::sign_out();

Header('Location: '.page::ROOT_URL);
exit;

?>