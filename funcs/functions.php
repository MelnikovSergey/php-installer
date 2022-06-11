<?php

function MySQL_version() {
  $output = shell_exec('mysql -V');
  preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
  return @$version[0] ? $version[0] : -1;
}
