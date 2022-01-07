<?php

require_once "code.php";
foreach ($kebabs as $kebab) {
  $a = 5 - $kebab['difficulte'];
  $j = 1;
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

    <?php foreach ($kebabs as $kebab) { ?>

      <div class="mb-2 p-2 card">
        <h3>Kebab <?= $kebab['garniture'] ?></h3>
        <p>Viande : <?= $viandes[$kebab['viande'] - 1] ?></p>
        <p>Sauce : <?= $sauces[$kebab['sauce'] - 1] ?></p>

        <div class="d-flex align-items-center">
          <p class="mb-0 me-1">Difficulté :</p>

          <?php for ($i = 0; $i < 5; $i++) { ?>
            <i class="<?php if ($kebab['difficulte'] > $i) {
                        echo "fas ";
                      } else {
                        echo "far ";
                      } ?>fa-star me-1"></i>
          <?php } ?>
        </div>




        <a href="kebab.php?id=<?= $kebab['id'] ?>" class="btn btn-info m-2 w-25">Voir le kebab</a>



      </div>

    <?php } ?>

  </div>





</body>

</html>