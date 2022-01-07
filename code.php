<?php

require_once "db.php";



if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $selectQuery = "SELECT kebabs.id, kebabs.garniture, kebabs.viande, kebabs.sauce, kebabs.difficulte FROM kebabs WHERE id = '$id'";
    $result = mysqli_query($myConnect, $selectQuery);
    $kebab = $result->fetch_assoc();
    if ($kebab['viande'] == 1) {
        $kebab['viande'] = "agneau";
    } elseif ($kebab['viande'] == 2) {
        $kebab['viande'] = "veau";
    } else {
        $kebab['viande'] = "dinde";
    }

    if ($kebab['sauce'] == 1) {
        $kebab['sauce'] = "blanche";
    } elseif ($kebab['sauce'] == 2) {
        $kebab['sauce'] = "harissa";
    } else {
        $kebab['sauce'] = "mayonnaise";
    }
    $a = 5 - $kebab['difficulte'];
    $j = 1;
} else {
    $myQuery = "SELECT * FROM kebabs";
    $kebabs = mysqli_query($myConnect, $myQuery);
}
