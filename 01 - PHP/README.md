## <a name="indice">Índice</a>

0. [Iniciando com servidor Apache, PHP e MySQL](https://github.com/comicodarko/Lab-PHP)
  - 0.1 [Configurando o back-end com XAMPP](https://github.com/comicodarko/Lab-PHP/#parte00-1)
  - 0.2 [Conhecendo o XAMPP](https://github.com/comicodarko/Lab-PHP/#parte00-2)
 
1. [PHP]()
  - 1.1 [Embutindo blocos PHP em páginas HTML](#parte01-1)
  - 1.2 [Comentários](parte01-2)

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