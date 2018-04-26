<?php

function initialize($config)
{
    // Show all errors
    ini_set('display_startup_errors', $config['html']['display_startup_errors']);
    ini_set('display_errors', $config['html']['display_errors']);
    error_reporting($config['html']['error_reporting']);
    
    // Define constants
    define( 'URLROOT', $config['URLROOT']);
    
    // Connect to the DB
    $db = new PDO($config['DB']['pdo'], $config['DB']['login'], $config['DB']['password']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
