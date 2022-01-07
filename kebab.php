<?php

require_once "code.php";

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
            <div class="collapse navbar-collapse" id="navbarColor01">

            </div>
        </div>
    </nav>

    <div class="container mt-5">



        <div class="mb-2 p-2 card">
            <h3>Kebab <?= $kebab['garniture'] ?></h3>
            <p>Viande : <?= $kebab['viande'] ?></p>
            <p>Sauce : <?= $kebab['sauce'] ?></p>

            <div class="d-flex align-items-center">
                <p class="mb-0 me-1">Difficulté :</p>
                <?php for ($i = 1; $i <= $kebab['difficulte']; $i++) { ?>
                    <i class="fas fa-star me-1"></i>
                    <?php if ($i == $kebab['difficulte']) {
                        for ($j = 1; $j <= $a; $j++) { ?>
                            <i class="far fa-star me-1"></i>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>




            <a href="kebab.php?id=<?= $kebab['id'] ?>" class="btn btn-info w-25">Voir le kebab</a>
        </div>



    </div>





</body>