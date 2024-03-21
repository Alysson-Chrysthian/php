<?php
    //Criando classe estagiario
    class estagiarios {
        //Criando atributos estaticos
        const MENSAGEMBEMVINDO = "Seja bem vindo";
        //Criando atributos
        public $nome;
        public $idade;
        /*É criado o atributo constante cargo, pois todos os que 
        estiverem dentro da classe estagiarios seram... estagiarios*/
        public const cargo = "Estagiario";
        //Metodo construtor
        public function __construct($nome, $idade) {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->cargo=cargo;
        }
    }

    echo estagiarios::MENSAGEMBEMVINDO;
?>