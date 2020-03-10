# Lab-PHP
Anotações e o possíveis devaneios sobre PHP

## Índice

0. [Iniciando com servidor Apache, PHP e MySQL](#parte00)
  - 0.1 [Configurando o back-end com XAMPP](#parte00-1)
  - 0.2 [Conhecendo o XAMPP](#parte00-2)

1. [PHP](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP)
  - 1.1 [Embutindo blocos PHP em páginas HTML](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-1) 
  - 1.2 [Comentários](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-2)
  - 1.3 [Variáveis](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-3)
  - 1.4 [Operadores de comparação](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-4)
  - 1.5 [Operadores Lógicos](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-5)
  - 1.6 [Operador Ternário](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-6)
  - 1.7 [Switch](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-7)
  - 1.8 [Casting de tipos](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-8)
  - 1.9 [Operadores Aritméticos](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-9)
  - 1.10 [Operadores de incremento/decremento](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-10)
  - 1.11 [Funções](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-11)
  - 1.12 [Funções para manipular strings](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-12)
  - 1.13 [Funções para tarefas matemáticas](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-14)
  - 1.14 [Funções para manipular datas](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP#parte01-14)

2. [](#parte02)


## <a name="parte00">Iniciando com servidor Apache, PHP e MySQL </a>

### Internet x Web

A **Arpanet** foi criada em plena guerra fria, mais precisamente em **1969** com objetivo estritamente militar. Para garantir que as comunicações norte americanas seriam mantidas mesmo com ataques inimigos que destruissem meios convencionais da época.

Em **1987** a internet passa a ter uso comercial e em 1988 ela chega ao Brasil.

Em **1990** Tim berners lee fez surgir o World Wide Web (WWW,ou Web).

Enquanto o foco da **internet** é basicamente conectar comuputadores atráves de protocolos a internet é independente de aplicações Web.

A **Web** é um serviço que roda na internet e prover acesso a conteúdos de hipertexto e hipermidia, o conteúdo é acessado através de browsers.

****
## <a name="parte00-1">Configurando o back-end com XAMPP (Linux)</a>

- 1 - https://www.apachefriends.org/pt_br/index.html

- 2 - No terminal: 
```console
chmod +x xampp-installer.run
```
- 3 - Inicie a instalação com sudo ./xampp-installer.run

> Configurando

- 1 - Para iniciar:
```console
 sudo /opt/lampp/lampp start
 
 Apenas o apache:
 sudo /opt/lampp/lampp startapache

```

- 1.1 - Para parar:
```console
 sudo /opt/lampp/lampp stop
```


- 2 - Para iniciar com a interface gráfica:
```console
  sudo /opt/lampp/manager-linux-x64.run
```
****

## <a name="parte00-2">Conhecendo o XAMPP (Linux) </a>
É importante lembrar sempre de iniciar os serviços quando for desenvolver/estudar: **Apache** e **MySQL**, seja pelo terminal ou pela interface gráfica.

>O **Apache** sempre usa a porta **80** e **443**.  
(mudei para 8080)

>O MySQL usa a porta **3306**

****

[Continua em 01 - PHP](https://github.com/comicodarko/Lab-PHP/tree/master/01%20-%20PHP)

****