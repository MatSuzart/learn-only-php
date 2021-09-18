<?php
require 'environment.php';

define("BASE", "http://localhost/ead/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'teste-senai';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'teste-senai';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>