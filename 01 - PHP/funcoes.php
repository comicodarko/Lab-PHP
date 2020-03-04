<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      // Void (sem retorno)
      function exibirBoasVindas() {
        echo "opa <br />";
      }

      exibirBoasVindas();

      //return
      function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
      }

      $resultado = calcularAreaTerreno(10, 10);

      echo $resultado;
    ?>
  </body>
</html>
