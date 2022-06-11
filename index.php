<?php
header("Content-Type: text/html; charset='utf-8'");

require_once("data/config.php");
require_once("funcs/functions.php");

$php_version = phpversion();

if($php_version < 7) {
  $error = true;
  $php_error = "Your PHP version is $php_version. To continue working, you need to update your PHP version";
}

$mysql_version = MySQL_version();

if($mysql_version < 5.6) {
	if($mysql_version == -1) {
		$mysql_check = "MySQL version will be checked at the next step.";
	} else {
		$mysql_check = "Your MySQL version is $mysql_version. The application requires version 5.6 or later";
	}
}

$install_application_session = $application_name . '_session_' . $postfix;

$_SESSION[$install_application_session] = 1;

if(empty($_SESSION[$install_application_session])) {
  $error = true;
  $session_error = "Sessions must be enabled!";
}

//...

header("Location: tpl/tpl_draft.php");
exit;