<?php

    class Usuario{
        public $id;
        public $nome;
        

        function __set($atributo,$value){
                $this->$atributo = $value;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        


    }
?>