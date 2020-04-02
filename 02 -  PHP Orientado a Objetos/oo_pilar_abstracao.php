<?php

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

?>
