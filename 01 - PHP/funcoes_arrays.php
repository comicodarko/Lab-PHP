<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    $array = 'String';
    $retorno = is_array($array);

    if($retorno) {
      echo "Sim, é um array";
    } else {
      echo "Não, não é um array";
    }

    echo "<hr/ >";

    $array = [1 => 'a', 7 => 'b', 18 => 'c'];

    echo "<pre>";
      print_r($array);
    echo "</pre>";

    echo "<hr/ >";

    $chaves_arrays = array_keys($array);

    echo "<pre>";
      print_r($chaves_arrays);
    echo "</pre>";

    echo "<hr/ >";

    $array = ['mouse', 'teclado', 'cabo hdmi', 'gabinete', 'fontes atx', 'notebook'];

    echo "<pre>";
      print_r($array);
    echo "</pre>";

    asort($array);

    echo "<pre>";
      print_r($array);
    echo "</pre>";


    sort($array);

    echo "<hr/ >";

    echo "<pre>";
      print_r($array);
    echo "</pre>";

    echo "<hr/ >";

    echo count($array);

    echo "<hr/ >";

    $array2 = ['teste1', 'teste2'];
    $array3 = ['teste3', 'teste4'];
    $array4 = ['teste5', 'teste6'];

    $array5 = array_merge($array2, $array3, $array4);

    echo "<pre>";
      print_r($array5);
    echo "</pre>";

    echo "<hr/ >";

    $string = '12/03/2020';

    $array = explode('/', $string);

    echo "<pre>";
      print_r($array);
    echo "</pre>";

    echo "<hr/ >";

    $array = ['12', '03', '2020'];

    $string_retorno = implode('/', $array);

    echo "<pre>";
      print_r($string_retorno);
    echo "</pre>";

    ?>
  </body>
</html>
