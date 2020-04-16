<?php

    //Modelo
    class Funcionario {

        //Atributos 
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        
        //Getters Setters
        function setNome($nome) {
            $this->nome = $nome;
        }
        
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

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
