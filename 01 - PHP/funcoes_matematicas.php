<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    // Arredonda o valor para cima.
    $num = 8.2;
    echo "<br/ >";
    echo "$num, arredondado para cima é: " . ceil($num);
    echo "<br/ >";
    // Arredonda o valor para baixo.
    echo "$num, arredondado para baixo é: " . floor($num);

    // Arredonda com base na fração.
    echo "<br />";
    echo "$num, arredondado com base na fração é: " . round($num);

    // Valor aleatório gerado.
    echo "<br />";
    echo "Valor aleatório gerado: ". rand(1, 10);

    // Valor máximo do s.o.
    echo "<br />";
    echo 'Valor máximo do sistema operacional: ' . getrandmax();

    // Retorna raiz quadrada.
    echo "<br />";
    echo 'Raiz quadrada de 9: ' . sqrt(9);

    ?>
  </body>
</html>

  
    ?>
  </body>
</html>
