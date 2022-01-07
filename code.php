<?php

require_once "db.php";

$viandes = ["Agneau", "Veau", "Dinde"];
$sauces = ["Blanche", "Harissa", "Moutarde"];


if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kebabs WHERE id = '$id'";
    $result = mysqli_query($myConnect, $sql);
    $kebab = $result->fetch_assoc();
} else {
    $sql = "SELECT * FROM kebabs";
    $kebabs = mysqli_query($myConnect, $sql);
}
