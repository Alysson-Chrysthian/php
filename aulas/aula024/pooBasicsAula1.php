<?php
    //Criação da classe
    class pessoas {
        //Declaração dos Atributos
        public $nome;
        public $idade;
        public $sexo;
        //Declaração dos Metodos
        //Metodos para definição dos atributos
        function Definir_Atributos(String $nome, int $idade, bool $sexo) {
            $this->nome=$nome;
            $this->idade=$idade;
            //Passa sexo como masculino se sexo for true e feminino caso sexo for false
            if ($sexo) $this->sexo="Masculino";
            else $this->sexo="Feminino";
        }
    }
    //instanciando objetos na minha classe
    $Pessoa1 = new pessoas();
    $Pessoa2 = new pessoas();
    $Pessoa3 = new pessoas();
    //Definindo os atributos do meu objeto
    $Pessoa1 -> Definir_Atributos("Alysson Chrysthian", 15, true);
    $Pessoa2 -> Definir_Atributos("Sara Maria", 15, false);
    $Pessoa3 -> Definir_Atributos("José Augusto", 16, true);
    //Exibindo as informações dos objetos e fazendo teste
    var_dump($Pessoa1);
    //Exibindo informações com foreach
    foreach($Pessoa1 as $k => $v) {
        print("$k: $v\n");
    }
    //exibindo somente o nome da pessoa1
    print("Nome: ".$Pessoa1->nome."\n\n");

    //fazendo isso com pessoa2
    foreach($Pessoa2 as $k => $v) {
        print("$k: $v\n");
    }
    //Exibindo so o sexo da pessoa2
    print("Sexo: ".$Pessoa2->sexo."\n\n");
    
    //Fazendo isso com pessoa3
    foreach($Pessoa3 as $k => $v) {
        print("$k: $v\n");
    }
    //Exibindo so a idade da pessoa3
    print("Idade: ".$Pessoa3->idade."\n");
    
    //Você pode alterar valores de atributos de variaveis de forma direta
    $Pessoa4 = new pessoas();
    $Pessoa4->nome = "Antonio Henrique";
    var_dump($Pessoa4);
    print("\n");
    //Testando instance of
    var_dump($Pessoa4 instanceof pessoas);

    if ($Pessoa4 instanceof pessoas) {
        print($Pessoa4->nome." Pertence a pessoas");
    } else {
        print("A instancia nao pertence a pessoas");
    }
?>