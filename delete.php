<?php

require_once "db.php";

$id = (int)$_POST['delete'];

// if (isset($_POST['delete']) && $_POST['delete']) {
//     $sql = "DELETE FROM kebabs WHERE id = '$id'";
//     mysqli_query($myConnect, $sql);
//     header('Location: index.php');
// }

$query = $pdo->prepare("DELETE FROM kebabs WHERE id = :id");
$query->execute([
    'id' => $id
]);


header("Location: index.php");
