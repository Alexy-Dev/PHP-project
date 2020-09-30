<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>SMArtGalaxy</title>
  </head>
  <body>

  <?php require "blocks/header.php" ?>

<div class="container mt-5">
  <h3 class="mb-5">Our foto & video from travel of Europe and not only</h3>

  <div class="d-flex flex-wrap">


  <?php
    for($i = 0; $i < 9; $i++):
    ?>
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Next travel</h4>
        </div>
        <div class="card-body">
          <img src="img/wiev/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
          <ul class="list-unstyled mt-3 mb-4">
            <li><a class="btn-outline-primary" href="/">Info</a></li>
            <li><a class="btn-outline-primary" href="/">Reviews</a></li>
          </ul>
          <a class="btn btn-lg btn-block btn-outline-primary" href="/snowboardgalaxy.php">More info</a>
        </div>
      </div>
  <?php endfor; ?>
    </div>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
