<?php

require_once "db.php";

$id = $_POST['delete'];

if (isset($_POST['delete']) && $_POST['delete']) {
    $sql = "DELETE FROM kebabs WHERE id = '$id'";
    mysqli_query($myConnect, $sql);
    header('Location: index.php');
}
