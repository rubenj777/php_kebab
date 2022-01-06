<?php

require_once "db.php";

$myQuery = "SELECT * FROM kebabs";
$kebabs = mysqli_query($myConnect, $myQuery);

foreach ($kebabs as $kebab) {
    if ($kebab['viande'] == 1) {
        $kebab['viande'] = "agneau";
    } elseif ($kebab['viande'] == 2) {
        $kebab['viande'] = "veau";
    } else {
        $kebab['viande'] = "dinde";
    }
}
