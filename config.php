<?php
require 'environment.php';

define("BASE", "http://localhost/learn_to_interview/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = '';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = '';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>
