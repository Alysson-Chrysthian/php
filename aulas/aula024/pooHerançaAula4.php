<?php
    //Criando a classe pai, pessoas
    class pessoas {
        //Definindo os atributos
        public string $nome;
        public int $idade;
        protected string $cpf;
        //Definindo metodos
        public function __construct($nome, $idade, $cpf) {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->cpf=$cpf;
        }

        protected function PegarCpf() {
            return $this->cpf;
        }

        public function PegarInfo() {
            $informações = [];
            $informações["Categoria"] = __CLASS__;
            foreach($this as $k => $v) {
                $informações[$k] = $v;
            }
            return $informações;
        }
    }
    //Criando a classe filho, funcionarios
    class funcionarios extends pessoas{
        //Definindo atributos de funcionarios
        public int $cod;
        //Metodo construtor de funcionarios
        public function __construct($nome, $idade, $cpf, $cod) {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->cpf=$cpf;
            $this->cod=$cod;
        }
    }
    $Funcionario = new funcionarios(
        "Alysson",
        16,
        "604.483.803-07",
        1
    );
    $FuncionarioInfo = $Funcionario -> PegarInfo();
    
    foreach($FuncionarioInfo as $k => $v) {
        print("\n$k:$v");
    }
?>