<?php

// Create a cookie with the name 'mycookie', value '12345', and an expiration time of 1 hour
setcookie('mycookie', '12345', time() + 3600, '/', '', false, true);

// Retrieve all cookie values
$cookies = $_COOKIE;

// Print all cookie values
foreach ($cookies as $name => $value) {
    echo $name . ' = ' . $value . '<br>';
}

// Delete the 'mycookie' cookie
setcookie('mycookie', '', time() - 3600, '/', '', false, true);

?>