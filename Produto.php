<?php

    class Produto{
        public $id;
        public $desc;
        public $qtd;
        public $valor;

        public function getDesc(){
            return $this->desc;
        }

        public function getQtd(){
            return $this->qtd;
        }

        public function getId(){
            return $this->id;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setDesc($desc){
            $this->desc = $desc;
        }

        public function setQtd($qtd){
            $this->qtd = $qtd;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }
    }

?>