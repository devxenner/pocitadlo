<?php


require_once(__DIR__.'/inc/functions.php');

$configuration = require(__DIR__.'/inc/config.php');

initialize($configuration);

echo str_replace(
    array(
	'{%URLROOT%}',
    ),
    array(
	URLROOT,
    ),
    file_get_contents(__DIR__.'/index.html')
);
exit(0);

