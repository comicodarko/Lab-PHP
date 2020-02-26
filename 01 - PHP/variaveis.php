<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      $name = 'Fábio José';
      $idade = 19;
      $peso = 50.5;
      $fumante = false;

      if ($fumante == true) {
        $fumante = 'Sim';
      } else {
        $fumante = 'Não';
      }

     ?>

     <h1>Ficha cadastral</h1>
     <br>
     <p>Nome: <?= $name ?></p>
     <p>Idade: <?= $idade ?></p>
     <p>Peso: <?= $peso ?></p>
     <p>Fumante: <?= $fumante ?></p>

  </body>
</html>
