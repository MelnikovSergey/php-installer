<?php
header("Content-Type: text/html; charset='utf-8'");

require_once("data/config.php");

$php_version = phpversion();

if($php_version < 7) {
  $error = true;
  $php_error = "Your PHP version is $php_version. To continue working, you need to update your PHP version";
}
