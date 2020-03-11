<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    $lista_coisas = [
      'Frutas' => [
        'Banana',
        'Maçã'
      ],
      'Pessoas' => [
        'Fábio',
        'José'
      ]
    ];

    print_r($lista_coisas);

    echo "<hr/ >";

    print_r ($lista_coisas['Frutas']);

    ?>
  </body>
</html>
