<?php


// Show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// Define constants
define( 'URLROOT', 'http://xenner.php5.cz' );

// Connect to the DB
$db = new PDO('mysql:host=localhost;dbname=czxenner;charset=utf8', 'czxenner', 'dbpa091xx');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);