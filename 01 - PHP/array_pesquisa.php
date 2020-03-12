<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php
      echo "<br />";
      // in_array()     - true ou false para a existência
      // array_search() - o indice do valor pesquisado

      $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

      $fruta = 'Banana';
      print_r($lista_frutas);

      $existe = in_array($fruta, $lista_frutas);

      if($existe) {
        echo "Sim, existe e está no indice: " . array_search($fruta, $lista_frutas);
      } else {
        echo "Não, não existe <hr />";
      }

      echo "<hr />";

      $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['Fábio', 'José']
      ];

      echo in_array('Uva', $lista_coisas['frutas']);

    ?>
  </body>
</html>
