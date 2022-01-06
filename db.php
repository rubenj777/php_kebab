<?php

$host = "localhost";
$username = "rubenkebab";
$password = "ruben";
$db = "rubenkebab";

$myConnect = mysqli_connect($host, $username, $password, $db);
if (!$myConnect) {
    echo "pb connection";
}
