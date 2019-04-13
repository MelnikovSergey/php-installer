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

echo $class_name;

?>
