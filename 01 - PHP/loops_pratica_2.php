<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      $funcionarios = [
        ['nome' => 'João', 'salário' => 2500],
        ['nome' => 'Maria', 'salário' => 3500],
        ['nome' => 'Júlia', 'salário' => 1100]
      ];

      foreach ($funcionarios as $id => $funcionario) {
        foreach ($funcionario as $id2 => $valor) {
          echo "$id2 - $valor <br />";
        }
        echo '<hr/ >';
      }

    ?>
  </body>
</html>
