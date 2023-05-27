<?php
sleep(2);
$t = microtime(true);
var_dump(
    $_SERVER['REQUEST_TIME_FLOAT'], 
    $t, 
    $t - $_SERVER['REQUEST_TIME_FLOAT']
);