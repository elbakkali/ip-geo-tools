<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 

require('../vendor/autoload.php');

$tools = new GeoTools\GeoTools();
echo var_dump($tools->isValidIpAddress('2001:0db8:85a3:0000:0000:8a2e:0370:7334', true));
