<?php

    class Pessoa {
        private $nome;
        private $sobrenome;
        
        public function ___construct() {
            $this->idade = 0;
        }

        public function setNome ($nome){
            $this->nome = $nome;
        }

        public function setSobreNome ($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getNomeCompleto () {
            return $this->nome." ".$this->sobrenome;
        }

    }

?>