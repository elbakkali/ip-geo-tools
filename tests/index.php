<?php
error_reporting(E_ALL); ini_set('display_errors', 1); 

require('../vendor/autoload.php');

$tools = new GeoTools\GeoTools();
echo var_dump($tools->isValidCountryCode('fr', true));
