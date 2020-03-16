<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

     $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

     print_r($itens);

     foreach($itens as $item) {
       echo $item;

       if($item == 'mesa') {
         echo 'Chegou em mesa';
       }

      echo "<br/ >";
     }

    ?>
  </body>
</html>
