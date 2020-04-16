## <a name="indice">Índice</a>

1. [PHP](https://github.com/comicodarko/Lab-PHP)
    
2. [Desenvolvendo a primeira aplicação WEB com PHP](https://github.com/comicodarko/HelpDesk)

3. [PHP Orientado a objetos]()
    - 3.1 [Introdução a Orientação a Objetos](#parte03-1)
    - 3.2 [Pilar da Abstração](#parte03-2)
    - 3.3 [Getters e Setteres](#parte03-3)
****

## <a name="parte03-1">Introdução</a>

Paradigma é um padrão, uma forma de se fazer alguma coisa.  
O PHP consegue lidar com os dois principais paradigmas, o **Procedural** e o **Orientado a Objetos**.

**Procedural** - Faz a chamada de procedimentos, conhecido como rotinas, subrotinas, métodos ou funções.
```php
$a = 10;
$b = 7;
$operador = 'soma';

function calcular($a, $b, $operador) {
    if($operador == 'soma') {
        return $a + $b;
    }
    return false;
}

echo calcular ($a, $b, $operador);
```

**Orientado a Objetos** - As estruturas de dados é que possuem seus respectivos comportamentos.
```php
class Calculadora {
    public $a = 10;
    public $b = 7;
    public $operador = 'soma';

    public function calcular() {
        if($this->operador == 'soma') {
            return $this->a + $this->b;
        }
        resturn false;
    }
}

$calcular = new Calculadora();
echo $calcular->calcular();
```

[Voltar ao índice](#indice)

****

## <a name="parte03-2">Pilar da abstração</a>

Nada mais é do que a forma que interpretamos as coisas do mundo real e transportamos essas coisas para dentro de nossas aplicações.

**Entidade** - Produto  
**Identidade** - x = new Produto()  
**Atributos** - categoria, título, descrição, valor  
**Métodos** - exibirResumoProduto, alterarValorProduto

Exemplo 'prático':
```php
//Modelo
    class Funcionario {

        //Atributos 
        public $nome = 'Fábio';
        public $telefone = '40028922';
        public $numFilhos = 'nenhum';
        
        //Métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos) {
			//Afetar um atributo do objeto   
			$this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();

	$y->modificarNumFilhos(3);
	
    echo $y->resumirCadFunc();
```

[Voltar ao índice](#indice)

****

## <a name="parte03-3">Getters e Setteres</a>

São métodos que nos permitem atender a uma **convenção**. A melhor forma de acessar e manipular os atributos de nossos objetos.

**Set** - Nos permite **setar** um valor.
```php
function setNome($nome) {
    $this->nome = $nome;
}
        
function setNumFilhos($numFilhos) {
    $this->numFilhos = $numFilhos;
}
```
**Get** - Nos permite **recuperar** um valor.
```php
function getNome() {
    return $this->nome;
}

function getNumFilhos() {
    return $this->numFilhos;
}
```

## Getters e Setters mágicos (overloading de atributos e métodos) 

Deve ter notado que para cada atributo 2 métodos são criados (um Getter e um Setter) isso acaba ficando bastante extenso e dedundante.

### Overloading (sobrecarga)
A ideia é criar um único metodo SET e um uníco método GET, capaz de se adaptar ao atributo que queremos manipular.

```php
function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
//_________________
$y->__set('nome', 'josé');
$y->__set('numFilhos', 2);

echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos.';

```

## Chamando métodos internamente

A função resumirCadFunc funcionará corretamente, porém para boas práticas use overloading:

```php
function resumirCadFunc() {
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filhos(s)";
}
```

[Voltar ao índice](#indice)

****

