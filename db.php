<?php


// $host = "localhost";
// $username = "rubenkebab";
// $password = "ruben";
// $db = "rubenkebab";

// $myConnect = mysqli_connect($host, $username, $password, $db);
// if (!$myConnect) {
//     echo "pb connection";
// }




$pdo = new PDO("mysql:host=localhost;dbname=rubenkebab;charset=utf8", "rubenkebab", "ruben", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
