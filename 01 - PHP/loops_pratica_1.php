<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

     $registros = [
       ['titulo' => 'Título notícia 1', 'conteudo' => 'noticia 1'],
       ['titulo' => 'Título notícia 2', 'conteudo' => 'noticia 2'],
       ['titulo' => 'Título notícia 3', 'conteudo' => 'noticia 3'],
     ];

     $idx = 0;
     while($idx < count($registros)) {
       echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
       echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
       $idx ++;
     }

    ?>
  </body>
</html>
