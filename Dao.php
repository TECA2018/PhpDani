<?php

    class Dao{
        private $host = '162.214.102.68';
        private $user = 'samuel_SamuelDEV';
        private $pass = 'Samuel2112@';
        private $base = 'samuel_TesteDani';
        public $bancoC;

        function UTF8($banco){
            // Correção UTF-8
            mysqli_query($banco,"SET NAMES 'utf8'");
            mysqli_query($banco,'SET character_set_connection=utf8');
            mysqli_query($banco,'SET character_set_client=utf8');
            mysqli_query($banco,'SET character_set_results=utf8');
        }

        function __construct(){
            $banco = mysqli_connect($this->host, $this->user, $this->pass, $this->base);
            if(mysqli_connect_errno($banco)){
                echo mysqli_connect_error();
            }
            $this->UTF8($banco);

            $this->bancoC = $banco;
        }

        function Conectar(){
            return $this->bancoC;
        }

        
    }

?>