<?php
    class funcionarios {
        //Definindo atributos privados
        private static int $codDisponivel = 1;
        //Definindo atributos publicos
        public String $nome;
        public int $idade;
        public $sexo;
        public float $salario;
        public int $cod;
        //Criando o metodo construtor
        public function __construct(String $name, int $idade, bool $sexo, float $salario) {
            //Aplicando os meus atributos ao meu objeto
            $this -> nome = $nome;
            $this -> idade = $idade;
            if ($sexo)
                $this -> sexo = "Masculino";
            else
                $this -> sexo = "Feminino"; 
            $this -> salario = $salario;
            //Self se refere a propria classe
            $this -> cod = self::$codDisponivel++;
        }
        //Criando um metodo destrutor
        public function __destruct() {
            //Mostrando as informações de um funcionario ao sair do sistema
            print("o funcionario ".$this->cod." de nome ".$this->nome." deixou o sistema\n");
        }
    }

    $PrimeiroFuncionario = new funcionarios(
        "Alysson Chrysthian",
        16,
        true,
        1250
    );
    $SegundoFuncionario = new funcionarios(
        "Felipe Willian",
        14,
        true,
        1250
    );
    //Exibindo as informações do primeiro funcionario
    foreach ($PrimeiroFuncionario as $k => $v) {
        if ($k == "nome") 
            print("\t$v\n");
        else    
            print($k."=>".$v."\n");
    }
    //Exibindo as informações do segundo funcionario
    foreach ($SegundoFuncionario as $k => $v) {
        if ($k == "nome")
            print("\t$v\n"); 
        else    
            print($k."=>".$v."\n");
    }
?>