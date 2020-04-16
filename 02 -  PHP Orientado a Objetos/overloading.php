<?php

    //Modelo
    class Funcionario {

        //Atributos 
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //Getters Setters (overloading  / sobrecarga )
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //Métodos
        function resumirCadFunc() {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filhos(s)";
        }
    }

    $y = new Funcionario();

	$y->__set('nome', 'josé');
    $y->__set('numFilhos', 2);

    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos.';

?>
