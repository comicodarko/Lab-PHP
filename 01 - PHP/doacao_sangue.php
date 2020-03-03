<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    $idade = 30;
    $peso = 50.3;

    if (($idade >= 16 && $idade <= 69 && $peso >= 50)) {
      echo "Atende aos requisitos";
    } else {
      echo "Não atende aos requisitos";
    }

    ?>
  </body>
</html>
