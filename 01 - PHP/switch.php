<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      $parametro = '2';

      switch($parametro) {
        case 1:
          echo "Entrou no case 1";
          break;

        case 2:
          echo "Entrou no case 2";
          break;

        case 2:
          echo "Entrou no case 3";
          break;

        default:
          echo "Entrou no default";
          break;
      }

    ?>
  </body>
</html>
