<?php

require_once "db.php";

$viandes = ["Agneau", "Veau", "Dinde"];
$sauces = ["Blanche", "Harissa", "Moutarde"];


if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
    $query = $pdo->prepare("SELECT * FROM kebabs WHERE id = :kebab_id");
    $query->execute([
        'kebab_id' => $id
    ]);
    $kebab = $query->fetch();
} else {
    $result = $pdo->query('SELECT * FROM kebabs');

    $kebabs = $result->fetchAll();
}
