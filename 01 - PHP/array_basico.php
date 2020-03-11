<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      // Sequenciais (numéricos)
      //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
      $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

      $lista_frutas[] = 'Abacaxi';
      /*
      echo "<pre>";
      var_dump($lista_frutas);
      echo "</pre>";
      echo "<hr />";
      echo "<pre>";
      print_r($lista_frutas);
      echo "</pre>";
      */

      echo $lista_frutas[2];

      // Associativos

      $lista_compras = [
        'a' => 'Camisa',
        'b' => 'Tênis',
        'x' => 'Chocolate',
        'z' => 'Mouse'
      ];
      echo '<pre>';
      print_r ($lista_compras);
      echo '</pre>';
    ?>
  </body>
</html>
