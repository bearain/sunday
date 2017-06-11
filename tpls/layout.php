<!DOCTYPE html><html>
<head>
	<meta charset="UTF-8">
	<style>
body {font-size: 1.4em}
body, textarea {font-family: Tahoma}
input[type=text], input[type=password] {border:solid 1px #ccc}
input, textarea {font-size:1em}
a, a:visited {color: blue}
hr {height:2px;border: none;background-color:#eee}
.err {color: #f66}
.note {color:#ccc}
	</style>
</head><body>
<?php

page::include_tpl('auth');
page::include_tpl(); //будет включен шаблон self::tpl_name, заданный предварительно в action методом self::set_tpl_name

?>
</body></html>