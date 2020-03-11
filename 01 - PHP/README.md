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
  - 1.8 [Casting de tipos](#parte01-8)
  - 1.9 [Operadores aritméticos](#parte01-9)
  - 1.10 [Operadores de incremento/decremento](#parte01-10)
  - 1.11 [Funções](#parte01-11)
  - 1.12 [Funções para manipular strings](#parte01-12)
  - 1.13 [Funções para tarefas matemáticas](#parte01-13)
  - 1.14 [Funções para manipular datas](#parte01-14)
  - 1.15 [Arrays](#parte01-15)
  - 1.16 [Arrays - Métodos de pesquisa](#parte01-15)

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

## <a name="parte01-6"> Operador ternário </a>

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

****

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

****

## <a name="parte01-9">Operadores Aritméticos</a>

São operadores matemáticos que nos permite fazer calculos.

**Adição** ( + ) - Soma de valores.  
**Subtração** ( - ) - Diferença entre valores.  
**Multiplicação** ( * ) - Produto dos valores. 
**Divisão** ( / ) - Quociente dos valores.
**Módulo** ( % ) - Resto existente em uma operação de vivisão.

```php
$num1 = 13;
$num2 = 4;

echo 'A soma entre $num1 e $num2 é: ' . ($num1 + $num2);
echo '<br />';
echo 'A subtração entre $num1 e $num2 é: ' . ($num - $num2);
echo '<br />';
echo 'A multiplicação entre $num1 e $num2 é: ' ($num1 * $num2);
echo '<br />';
echo 'A divisão entre $num1 e $num2 é: ' . ($num1 / $num2);
echo '<br />';
echo 'O módulo entre $num1 e $num2 é: ' . ($num1 % $num2);
    
  ```

### Operações aritméticas na atribuição de valores

Jeito simples:
```php
$x = 10;
$x = $x + 5;
```

Jeito 'combinado':
```php
$x = 10;
$x += 5;
```
> O resultado será o mesmo, sendo possível usar também para subtração, divisão, multipicação e módulo :).

> Lembrando que o operador aritmético fica sempre a **esquerda**.

[Voltar ao índice](#indice)
****

## <a name="parte01-10">Operadores de incremento/decremento</a>

Operadores que permitem adicionar ou remover 1 unidade de um valor numérico.

**Pré-incremento** (++$a) - Adiciona 1 unidade antes de retornar $a.   
**Pós-incremento** ($a++) - Retorna $a e depois adiciona 1 unidade.  
**Pré-decremento** (--$a) - Remove 1 unidade antes de retornar $a.  
**Pré-incremento** (++$a) - Retorna $a e dopois remove 1 unidade.

[Voltar ao índice](#indice)
****

## <a name="parte01-11"> Funções </a>

Encapsular um bloco de códigos para reutilização. Pequenos "sub programas" para uma finalizade especifica, evitando a redudância de código.

Declaração:
```php
function exibirBoasVindas() {

  echo 'Bem-vindo ao curso de PHP';

}
```
> É recomendado usar para nomes de funções duas palavras combinadas, sendo a primeira um verbo no infinitivo e a segunda substantivo.

Outro exemplo:

```php
function calcularAreaTerreno($largura, $comprimento) {

  $area = $largunra * $terreno;

  return $area;
}
```
> Note o uso de parâmetros (ou argumentos).

A função **exibirBoasVidas** é do tipo void, já que ela não tem um retorno definido.

### Exercicio de fixação

Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.

```php
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
```
[Voltar ao índice](#indice)
****

## <a name="parte01-12">Funções nativas para manipular strings</a>

**strtolower**($texto) - Transforma todos os caracteres da string em **minúsculos**.

**strtoupper**($texto) - Transforma todos os caracteres da tring em **maiúsculos**.

**ucfirst**($texto) - Transforma o **primeiro** caracter da string em **maiúsculo**.

**strlen**($texto) - Conta a **quantidade** de caracteres de uma string.
> Lembrando que espaço também é caractere.

**str_replace**(< procura por >, < subistitui por >, $texto ) - Subistitui uma cadeia de caracteres por outra dentro de uma string.
> Lembrando que é CASE SENSITIVE.
> Pode ser usado para substituir ( . ) por ( , ) em números float.

**substr**($texto, < posição inicial >, < qtde caracteres >) - Retorna parte de uma string apartir de uma posição. 

[Voltar ao índice](#indice)
****

## <a name="parte01-13">Funções nativas parar tarefas matemáticas</a>

**ceil**($numero) - Arredonda o valor para **cima**.  
> Atenção em valores negativos. -2.3 será arredondado para -2

**floor**($numero) - Arredonda o valor para **baixo**.  
> Atenção em valores negativos. -2.3 será arredondado para -3

**round**($numero) - **Arredonda** o valor com vase nas casas decimais.
> Para **baixo** caso **.0** até **.4**.  
> Para **cima** caso maior ou igual a **.5**.

**rand**(< inicio do intervalo >, < final do intervalo >) - Gera um inteiro aleatório.

**sqrt**($numero) - Retorna a raiz quadrada.

**getrandmax**() - Retorna o valor máximo do sistema operacional.

abs($numero) - Retorna o valor absoluto.
> Caso for negativo ele retornará positivo. 

[Voltar ao índice](#indice)
****

## <a name="parte01-13">Funções nativas para manipular datas</a>

Vale lembrar que para calculo e recomendado usar **ano mês dia**.

**date**(formato) -> Recupera a data atual  
Ela tem diversos tokens para serem combinados e retornar a saída da data atual.
```php
  echo date('d');
  echo date('d/m/Y H:i:');
```
>https://www.php.net/manual/pt_BR/function.date

**date_defaul_timezone_get**(timezone) - Recupera o timezone default da aplicação.
```php
echo date_defaul_timezone_get();
```
> Por padrão irá retornar a timezone padrão do PHP, Europe/Berlin.

**date_defaul_timezone_set**(timezone) - Atualiza o timezone default da aplicação.

```php
echo date_default_timezone_set('America/Sao_Paulo');
```

**strtotime**(data) - Transforma datas textuais em segundos.

Em PHP o retorno é em segundos, diferente do JavaScript que é retornado em milissegundos.

```php
echo $time_inicial = strtotime($data_inicial);
```
>lembrando essa função espera '**ano-mes-dia**' (separados por traço).

[Voltar ao índice](#indice)
****

## <a name="parte">Array</a>

### O que são Arrays?
São listas ordenadas, variáveis que nos permitem relacionar itens associados a indices.  

#### Sequênciais:
```php
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
```

Forma simplificada:
```php
$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
```

Para **adicionar** um item a um array:
```php
$lista_frutas[] = 'Abacaxi';
```

Para retornar apenas 1 item:
```php
echo $lista_frutas[<Indice desejado>];
```

### Associativo:
```php
$lista_compras = [
  'a' => 'Camisa',
  'b' => 'Tênis',
  'x' => 'Chocolate',
  'z' => 'Mouse'
];
```

Para **adicionar** um item a um array associativo:
```php
$lista_frutas['w'] = 'Teclado';
```

## Array multidimensional

São **arrays de arrays**

```php
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
```

[Voltar ao índice](#indice)

****

## <a name="parte01-15">Arrays - Métodos de pesquisa</a>

Como podemos realizar pesquisas dentro de arrays com o PHP?

**in_array**('item', $nomeArray) - Retorna **true ou false** para a existência do que está sendo procurado.

```php
in_array('Maçã', $lista_frutas);
```
> Caso true = 1  
> Caso false = vazio

Um pequeno exemplo de tratação de retorno:
```php
$existe = in_array('Maçã', $lista_frutas);

  if($existe) {
    echo "Sim, existe";
  } else {
    echo "Não, não existe";
  }
```

**array_search**('item', $nomeArray) - Retorna o **indice do valor** pesquisado, caso ele exista.

```php
array_search('Maçã', $lista_frutas);
```
> Caso não exista retorna **null** e não false.

```php
$existe = in_array($fruta, $lista_frutas);

  if($existe) {
    echo "Sim, existe e está no indice: " array_search($fruta, $lista_frutas);
  } else {
    echo "Não, não existe";
  }
```

### Como funcionam as pesquisas em Arrays multidimensionais?

Por enquanto, enquanto não avançamos:

```php
echo in_array('Uva', $lista_coisas['frutas']);
```

[Voltar ao índice](#indice)

****