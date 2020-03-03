## <a name="indice">Índice</a>

0. [Iniciando com servidor Apache, PHP e MySQL](https://github.com/comicodarko/Lab-PHP)
  - 0.1 [Configurando o back-end com XAMPP](https://github.com/comicodarko/Lab-PHP/#parte00-1)
  - 0.2 [Conhecendo o XAMPP](https://github.com/comicodarko/Lab-PHP/#parte00-2)
 
1. [PHP]()
  - 1.1 [Embutindo blocos PHP em páginas HTML](#parte01-1)
  - 1.2 [Comentários](#parte01-2)
  - 1.3 [Variáveis](#parte01-3)
  - 1.4 [Operadores de comparação](#parte01-4)
  - 1.5 [Operadores Lógicos](#parte01-5)
  - 1.6 [Operador Ternário](#parte01-6)
  - 1.7 [Switch](#parte01-7)
  - 1.8 [Casting de tipos](#parte01-08)

# O que é o PHP?

Hypertext PreProcessor.

Pode ser usado em scripts de linha de comando - Aplicações desktop - E por fim Aplicações **server-side** (Aplicações que rodam do lado do servidor).

- É uma linguagem de programação interpretada e não compilada.
- Suporta Paradigma Estrutural e Orientado a Objetos.
- Suporta diversos banco de dados.
- Suporta diversos protocolos de comunicação.

## <a name="parte01-1">Embutindo blocos PHP em páginas HTML</a>

Tag padrão
```php
<?php código aqui ?>
```
>Habilitada

Tag de impressão
```php
<?= código aqui ?>
```
>Habilitada

Tag curta 
```php
<? código aqui ?>
```
>DESABILITADA

*Asp tag
```php
<% código aqui %>
```
> DESCONTINUADA NA VERSÃO 7

### Quando as tags?

```php
  <?php

  echo 'Tag padrão';

  ?>

  <?= 'Tag de impressão'; ?>

  <? echo 'Tag curta'; ?>
```
> Para utilizar tags curtas é necessário habilitar a mesma em:
>**opt/lampp/etc/php.ini**
>
>e em:
>http://php.net/short-open-tag  
>short_open_tag=Off
>
>Definir como **on**.

[Voltar ao índice](#indice)

****

## Saída de dados com echo() e print()

É possível inserir elementos HTML na página utilizando echo() e print()
```php
    <?php

    echo "Comando echo <br />";
    print "Comando print <hr />";

    ?>
```

### Mas qual a diferença?

A peculiaridade o **print** é que ele retorna um valor caso o mesmo seja executado com sucesso e caso haja falha sendo 1 para sucesso e 0 para falha.

```php
  echo print('teste');
```
> Por ter duas etapas o print se torna um pouco mais lento para ser executado


### Páginas Estáticas x Dinâmicas

Request de um arquivo .php, então repassa a solicitação para o interpretador do PHP > Abre o script solicitado, interpreta e devolvo o retorno (em HTML) para o Apache (response).
>É por isso que o cliente não consegue ver o código PHP.

[Voltar ao índice](#indice)
****

## <a name="parte01-2">Comentários</a>

```php
// Comentário de uma linha
```

```php
# Comentário de uma linha
```

```php
/*
  Comentário de
  múltiplas
  linhas
*/ 
```
****

## <a name="parte01-3">Variáveis</a>

Utilizadas para armazenamentos temporário de dados.

### Tipos
- String - Armazena textos.
- Int - Armazena valores numéricos inteiros (positivos e negativos).
- Float - O mesmo de int, porem com fração (10.3).
- Boolean - Armazena estados (true, false).
- Array - Um mapa ordenado de variáveis que se relacionam.


### Regras para declaração de variáveis em PHP
- Deve obrigatoriamente iniciar com o caractere **$**.
- Não podem conter espaços ou caracteres especiais (fora o underline).

PHP não suporta e nem requer definição explĺicita de tipo.

### Case sensitive
$nome - $Nome - $NOME

### Exemplos
>válidos  

$nome - $ fone1 - $endereco_2

>inválidos

$ idade - $1fone - $número

## Variáveis - Prática

Para facilitar utilizamos tag de impressão quando queremos imprimir algo:

```php
  <?php
      $name = 'Fábio José'; //String
      $idade = 19;  //Int
      $peso = 50.5; //Float
      $fumante = false; //Boolean  

      //True = '1'
      //Flase = ''

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
```

## Variáveis constantes

São variáveis cujo o valor não pode ser modificados na instância da aplicação. Um exemplo rápido de sua utilidade é para parametrização de informações de ambiente da aplicação, por exemplo:

### Ambiente de desenvolvimento

BD_URL (endereco_bd_dev)
BD_USUARIO (usuario_dev)
BD_SENHA (senha_dev)
****

### Ambiente de produção

**BD_URL** (endereco_bd_prod)  
**BD_USUARIO** (usuario_prod)  
**BD_SENHA** (senha_prod)  

>Sendo assim, quando a aplicação for migrada para a produção, não será necessário procurar muito além disso.

Para criar **constantes** é necessário usar uma função que espera dois parâmetros, sendo o primeiro o **nome** da variável e o segundo o seu **valor**.

```php
  define('BD_URL', 'endreco_bd_dev');    
```
>É uma boa prática para constantes sempre utilizar **caracteres maiúsculos**.

A sintaxe de recuperação também é diferente, não sendo necessário o uso do $.
```php

```

[Voltar ao índice](#indice)
****

## Concatenação

```php
<?php
  $name = 'Fábio';
  $color = 'Azul';
  $age = 19;

  //Operador .
  echo 'Olá ' . $name . ', vi que sua cor preferida é ' . $color . ', tem ' . $age . ' anos';
?>
```
Algo parecido com template string: 

```php
  //Aspas dubplas
  echo "Olá $name, vi que sua cor preferida é $color, tem $age anos";
```
> Lembrando que isso interfete no desempenho, já que as aspas duplas verificam o valor em cada variável.

[Voltar ao índice](#indice)
****

## If/else

```php
if (condição) {
  //Trecho de código que será executado caso true
} else {
  //Trecho de código que será executado caso false
}
```

```php
if (condição) {
  //Executado caso true
} else if (condição) {
  //Executado caso false na primeira e true nessa
} else {
  //Executado caso false em todas
}
```

## <a name="parte01-4">Operadores de comparação (Condicionais)</a>

São capazes de formar expressões condicionais para o comando **if**.

### Operadores:

**igual** (**==**) - Verifica se os valores comparados são **iguais**.

**Idêntico** (**===**) - Verifica se os valores comparados são **iguais** e do mesmo **tipo**.

**Diferente** (**!=**) - Verifica se os valores comparados são **diferentes**.

**Diferente** (**<>**) - Verifica se os valores comparados são **diferentes**.

**Não idêntico** (**!==**) - Verifica se os valores comparados são **diferentes** e de **tipos diferentes**.

**Menor** (**<**) - Verifica se o valor da **esquerda** é **menor** que o valor da direita.

**Maior** (**>**) - Verifica se o valor da **esquerda** é **maior** que o valor da direita.

**Menor igual** (**<=**) - Verifica se o valor da **esquerda** é **menor** ou **igual** o valor da direita.

**Maior igual** (**>=**) - Verifica se o valor da **esquerda** é **Maior** ou **igual** o valor da direita.

> Vale lembrar que if sem chaves condicionará apenas a primeira instrução, exempo:

```php
if ('a' === 'a') echo 'verdadeiro;
```

## <a name="parte01-5"> Operadores Lógicos </a>

Servem para conectar operações de comparação criando condições mais complexas de decisão:

### Operadores:

**E** (**&&** ou **AND**) - Verdadeiro **se todas** as expressões forem **verdadeiras**.

**OU** (**||** ou **OR**) - Verdadeiro **se pelo menos uma das** expressões for **verdadeira**.

**XOR** (**XOR**) - Verdadeiro apenas **se uma das expressões** for verdadeira, mas **não ambas**.

**NEGAÇÃO** (**!**) - **Inverte** o resultado da expressão.

### Para variáveis com valor boolean, o resultado da expressão é o mesmo.

```php
$usuario_possui_cartao_loja = true;

// True
if ($usuario_possui_cartao_loja)

// False
if (!$usuario_possui_cartao_loja)
```

## <a name="parte01-6" Operador ternário </a>

Operadores ternários retornam apenas 1 instrução, diferente de if/else que podem retornar blocos de instruções. Um exemplo:

```php
// Nesse caso se verdadeiro ou falso, retorna apenas 1 instrução
if ($usuario_possui_cartao_loja) {
  echo "Sim";
} else {
  echo "Não";
}

// Com operador ternário
<?= $usuario_possui_cartao_loja ? "Sim" : "Não"; ?>

// Ou

<?php
  $teste = $recebeu_desconto_frete ? 'Sim' : 'Não';
  echo $teste;
?>
```

### Pequeno exercicio de fixação

Um script capaz de identificar se uma determinada pessoa pode ou não doar sangue.  
Utilize as variáveis **$idade** e **$peso** no processo.  
Faça atribuição de valores as variáveis de forma **estática**.
> Se a idade informada estiver entre (e inclusive) **16 e 69** anos e o peso for igual ou superior a **50kg**, então o sistema deve imprmiir a mensagem "Atende aos requisitos", caso o contrário será impresso "Não atende aos requisitos".

```php
$idade = 30;
$peso = 50.3;

  if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
    echo "Atende aos requisitos";
  } else {
    echo "Não atende aos requisitos";
  }
```

## <a name="parte01-07"> Switch </a>

É um condicional, porém mais especifico/restrito que um if/else.

```php 
$opcao = 2

switch (opcao) {
  case 1:
  //código
  break;

  case 2:
  //código
  break;

  case 3:
  //código
  break;

  default:
  //funciona como um "else"
  break
}
```

> Lembrando que essa comparação é por igualdade e não por idêntidade logo por exemplo **"2"** irá seguir o fluxo de **2**.

### True = 1

```php
$parametro = true;

  switch($parametro) {
    case 1:
      echo "Entrou no case 1";
      break;
      
    case 2:
      echo "Entrou no case 2";
      break;
      
    case true:
      echo "Entrou no case 3";
      break;

    default:
      echo "Entrou no default";
      break;
  }
```
> No caso a cima ele irá seguir o case 1, já que o PHP internamente trata o valor true como 1.

[Voltar ao índice](#indice)

## <a name="parte01-08"> Casting de tipos </a>

Converter uma variável de um tipo para o outro.

A função **gettype()** espera uma variável como parâmetro e retorna o tipo da variável.

De **int** para **float**.

```php
$valor = 2;
$valor2 = (float) $valor;
```
> **float** pode ser subistituído por **real**

De **int** para **string**.

```php
$valor = 2;
$valor2 = (string) $valor;
```

De **float** para **int**
```php
$valor = 2.90;
$valor2 = (int) $valor;
```
> Lembrando que o número perderá o valor fracionado.

De **float** para **string**
```php
$valor = 2.90;
$valor2 = (string) $valor;
```
> Lembrando que todos os caracteres serão convertidos.

De **string** para **int**
```php
$valor = "2.90";
$valor2 = (int) $valor;
```
> Lembrando que mesmo sendo string o valor fracionado será perdido.

> Lembrando que caso a string não seja números um 0 será retornado.

De **string** para **float**
```php
$valor = "2.90";
$valor2 = (float) $valor;
```
> O valor fracionado será preservado. 

### Em boolean controlamos estados, verdadeiro ou falso

O fato da variável representar um valor válido retornará true, seja numérico ou textual:

De **string** para **boolean**
```php
$valor = "2.90";
$valor2 = (boolean) $valor;
```
> Retornará 1, já que 1 = true.

De **string** para **boolean**
```php
$valor = "";
$valor2 = (boolean) $valor;
```
> False não tem um valor logo não retorna nd.

De **boolean** para **int**
```php
$valor = true;
$valor2 = (int) $valor;
```
> No caso de true retornará 1 e false retornará 0. O mesmo acontece de boolean para string, porém em formato textual.

[Voltar ao índice](#indice)