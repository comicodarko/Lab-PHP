<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

      //Recuperação da data atual / data corrente
      echo date('d'); // Retorna o dia.
      echo '<br />';
      echo date('D'); // Retorna o dia em string.
      echo '<br />';
      echo '<br />';

      echo date('d/m/Y H:i:'); // formatado

      echo '<br/ >';

      echo date_default_timezone_get();
      echo '<br/ >';

      echo date_default_timezone_set('America/Sao_Paulo'); // Por enquanto são paulo, futuramente talvez brasilia
      echo '<br/ >';

      echo date('d/m/Y H:i:'); // formatado e com timezone "correto"

      echo '<hr/ >';

      $data_inicial = '2020-01-01';
      $data_final = '2020-01-2';

      //Convertendo para timestamp
      //01/01/1970

      echo $time_inicial = strtotime($data_inicial);
      echo '<br />';
      echo $time_final = strtotime($data_final);
      echo '<br />';
      echo $diferenca_times = $time_final - $time_inicial;
      echo '<br />';
      $segundos_existem_dia = 24 * 60 * 60;

      echo "Um dia possui $segundos_existem_dia segundos. <br />";

      echo 'Logo a diferença de dias é: ' . $diferenca_times / $segundos_existem_dia;

    ?>
  </body>
</html>
