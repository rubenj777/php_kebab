<?php

require_once "db.php";

$editMode = false;

if (!empty($_GET['id']) && ctype_digit($_GET['id']) && isset($_GET['edit'])) {
    require_once "code.php";
    $editMode = true;
}

if (!empty($_POST['viande']) && ctype_digit($_POST['viande']) && !empty($_POST['garniture']) && !empty($_POST['sauce']) && ctype_digit($_POST['sauce']) && !empty($_POST['difficulte']) && ctype_digit($_POST['difficulte'])) {

    $viande = (int)$_POST['viande'];
    $sauce = (int)$_POST['sauce'];
    $difficulte = (int)$_POST['difficulte'];
    $garniture = mysqli_real_escape_string($myConnect, htmlspecialchars($_POST['garniture']));

    // $sql = "INSERT INTO kebabs (garniture, viande, sauce, difficulte) VALUES ('$garniture', '$viande', '$sauce', '$difficulte')";
    // $result = mysqli_query($myConnect, $sql);
    // $id = $myConnect->insert_id;
    // header("Location: kebab.php?id=$id");

    $query = $pdo->prepare("INSERT INTO kebabs(viande, garniture, sauce, difficulte) VALUES (:viande, :garniture, :sauce, :difficulte)");
    $query->execute([
        'viande' => $viande,
        'garniture' => $garniture,
        'sauce' => $sauce,
        'difficulte' => $difficulte,
    ]);







    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Ruben Kebab</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/rubenkebab"><i class="fas fa-utensils me-3" style="font-size:25px"></i>Ruben Kebab</a>
            <a class="btn btn-primary" href="createKebab.php">Constitue ton kebab</a>
        </div>
    </nav>

    <div class="container mt-5">

        <form action="<?php if ($editMode) {
                            echo "edit.php";
                        } ?>" method="post" class="d-flex flex-column w-25">

            <textarea placeholder="Ta garniture" name="garniture" id="" cols="30" rows="5"><?php if ($editMode) {
                                                                                                echo $kebab['garniture'];
                                                                                            } ?></textarea>
            <select name="viande" class="m-2">
                <?php if ($editMode) { ?>
                    <option value="<?= $kebab['viande'] ?>"><?= $viandes[$kebab['viande'] - 1] ?></option>
                <? } else { ?>
                    <option>Selectionne une viande</option>
                <?php } ?>

                <option value="1">Agneau</option>
                <option value="2">Veau</option>
                <option value="3">Dinde</option>
            </select>
            <select name="sauce" class="m-2">
                <?php if ($editMode) { ?>
                    <option value="<?= $kebab['sauce'] ?>"><?= $sauces[$kebab['sauce'] - 1] ?></option>
                <? } else { ?>
                    <option>Selectionne une sauce</option>
                <?php } ?>
                <option value="1">Blanche</option>
                <option value="2">Harissa</option>
                <option value="3">Mayonnaise</option>
            </select>
            <select name="difficulte" class="m-2">
                <?php if ($editMode) { ?>
                    <option value="<?= $kebab['difficulte'] ?>"><?= $kebab['difficulte'] ?></option>
                <? } else { ?>
                    <option>Selectionne une difficulté</option>
                <?php } ?>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <?php if ($editMode) { ?>
                <input type="hidden" name="id" value="<?= $kebab['id'] ?>">
            <?php } ?>

            <button type='submit' class='btn btn-success'>Enregistrer</button>


        </form>





    </div>



</body>

</html>