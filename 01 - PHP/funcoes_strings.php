<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      $texto = 'curso completo de PHP';
      //string to lower
      echo '<br />';
      echo $texto . '<br />';
      echo strtolower($texto);

      echo '<hr />';

      //string to upper
      echo '<br />';
      echo $texto . '<br />';
      echo strtoupper($texto);

      echo '<hr />';

      //uppercase first
      echo '<br />';
      echo $texto . '<br />';
      echo ucfirst($texto);

      echo '<hr />';

      //string length
      echo '<br />';
      echo $texto . '<br />';
      echo "strlen($texto)";

      echo '<hr />';

      //string replace
      echo '<br />';
      echo $texto . '<br />';
      echo str_replace('PHP', 'JavaScript',$texto);

      echo '<hr />';

      //string to uppercase first
      echo '<br />';
      echo $texto . '<br />';
      echo '...' . substr($texto, 6, 8) . '...';

    ?>
  </body>
</html>
