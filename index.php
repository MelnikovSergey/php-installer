<?php
header("Content-Type: text/html; charset='utf-8'");

require_once("data/config.php");

if ($_GET['do']) {
	$name = strip_tags($_GET['do']);

	if (file_exists(CLASSES.$name.'.php')) {
		$class_name = Sname;
	} else {
		$class_name = "main";
	}
} else {
	$class_name = "main";
}

function __autoload($class_name) {

	require_once(CLASSES.$class_name.'.php');
}

$obj = new $class_name;
$res_arr = $obj->get_body();

require THEME.'index.php');

?>
