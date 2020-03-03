<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    $valor = 2;
    //$valor2 = (float) $valor;
    //$valor2 = (string) $valor;
    //$valor2 = (int) $valor;
    //$valor2 = (boolean) $valor;

    echo '$valor' . ' ' . gettype($valor);
    echo(' ');
    echo '$valor2' . ' ' . gettype($valor2);

    ?>
  </body>
</html>
