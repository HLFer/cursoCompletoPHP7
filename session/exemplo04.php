<?php

session_id('36438e76e98fe4df716809dc41793e3d');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>