<?php
    class Classe1{
        private $nome;
        private $idade;

        public function __construct($nome,$idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }
    }

    $teste = new Classe1("Gabriel","23 anos");

    echo $teste->getNome();
    echo $teste->getIdade();
    
?>