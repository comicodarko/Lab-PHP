<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      $num = 1;
      while(true) {
        echo $num;
        if($num >= 100) {
          break;
        }
        $num++;
      }

      echo "<hr/ >";

      $num = 0;
      while($num < 10) {

        $num++;

        if($num == 2 || $num == 6) {
          continue;
        }
        echo $num;
      }

    ?>
  </body>
</html>
