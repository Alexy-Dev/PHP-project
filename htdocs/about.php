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
    <h3>Contact form</h3>
  <form action="check.php" method="post">
    <input type="email" name="email" placeholder="Input Email" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Input message"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Send</button>
  </form>
  </div>
  <?php require "blocks/footer.php" ?>



</body>
</html>
