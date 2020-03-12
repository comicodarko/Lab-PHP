<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    for ($numero = 0; $numero < 10; $numero++) {
      echo "X = $numero <br/ >";
    }

    echo "<hr/ >";

    for ($numero; true ; $numero++) {

      if ($numero >= 20) {
        break;
      }
      echo "X = $numero <br/ >";
    }

    ?>
  </body>
</html>
