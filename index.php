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
  <title>Ruben Kebab</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/rubenkebab">Ruben Kebab</a>
      <div class="collapse navbar-collapse" id="navbarColor01">

      </div>
    </div>
  </nav>

  <div class="container mt-5">

    <?php foreach ($kebabs as $kebab) { ?>

      <div class="mb-2 p-2 card">
        <h3>Kebab <?= $kebab['garniture'] ?></h3>
        <p><?= $kebab['viande'] ?></p>
        <p><?= $kebab['sauce'] ?></p>
        <p>Difficulté : <?= $kebab['difficulte'] ?></p>
        <form action='' method='get'>
          <button name='see' value='' type='submit' class='btn btn-info me-2'><strong>Voir le kebab</strong></button>
        </form>
      </div>

    <?php } ?>

  </div>





</body>

</html>