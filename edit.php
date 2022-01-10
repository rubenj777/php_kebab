<?php

require_once "db.php";
echo "bien arrive sur cette page";

var_dump($_POST);


if (!empty($_POST['viande']) && ctype_digit($_POST['viande']) && !empty($_POST['garniture']) && !empty($_POST['sauce']) && ctype_digit($_POST['sauce']) && !empty($_POST['difficulte']) && ctype_digit($_POST['difficulte']) && !empty($_POST['id']) && ctype_digit($_POST['id'])) {

    $viande = (int)$_POST['viande'];
    $sauce = (int)$_POST['sauce'];
    $difficulte = (int)$_POST['difficulte'];
    $garniture = htmlspecialchars($_POST['garniture']);
    $id = (int)$_POST['id'];

    // $sql = "UPDATE kebabs SET garniture = '$garniture', viande = '$viande', sauce = '$sauce', difficulte = '$difficulte' WHERE id = '$id'";
    // $result = mysqli_query($myConnect, $sql);

    $query = $pdo->prepare("UPDATE kebabs SET garniture = :garniture, viande = :viande, sauce = :sauce, difficulte = :difficulte WHERE id = :id");
    $query->execute([
        'garniture' => $garniture,
        'viande' => $viande,
        'sauce' => $sauce,
        'difficulte' => $difficulte,
        'id' => $id
    ]);

    header("Location: kebab.php?id=$id");
}
