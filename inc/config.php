<?php

// Show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// Connect to the DB
$db = new PDO('mysql:host=localhost;dbname=pocitadlo;charset=utf8mb4', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);