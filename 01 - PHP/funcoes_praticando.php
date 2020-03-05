<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso php</title>
  </head>
  <body>
    <?php

    $aliquota = '';
    $imposto = 0;

    function calcularImposto($salario) {
      if ($salario <= 1903.93) {
        $aliquota = 'isento';
      } else if ($salario <= 2826.65) {
        $aliquota = 7.5;
      } else if ($salario <= 3751.05) {
        $aliquota = 15;
      } else if ($salario <= 4664.68) {
        $aliquota = 22.5;
      } else if ($salario > 4664.68) {
        $aliquota = 27.5;
      }

      switch($aliquota) {
        case 7.5:
        $imposto = $salario * 0.075;
        break;

        case 15:
        $imposto = $salario * 0.15;
        break;

        case 22.5:
        $imposto = $salario * 0.225;
        break;

        case 27.5:
        $imposto = $salario * 0.275;
        break;

        default:
        $imposto = 0;

      }
      echo "Seu salário é de R$$salario reais, seu aliquota é de $aliquota%, sendo assim o imposto é de R$$imposto reais.";
    }

    calcularImposto(2826.66);

    ?>
  </body>
</html>
