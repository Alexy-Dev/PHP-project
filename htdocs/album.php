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

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1>Album 1</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </section>
<div class="d-flex flex-wrap">

        <?php
          for($i = 0; $i < 9; $i++):
          ?>
          <div class="card mb-4 shadow-sm">

              <div class="card-body">

                <div id="comp-iqm2knvh" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" class="style-k3pzdwek" data-state="desktop shouldUseFlex center"><a href="img/wiev/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail"><img src="img/wiev/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail"></a></div>

              </div>
            </div>
        <?php endfor; ?>
          </div>

  </main>

  <?php require "blocks/footer.php" ?>
</body>
</html>
