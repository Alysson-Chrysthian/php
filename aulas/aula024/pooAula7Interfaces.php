<?php
    /*
    Interfaces são contratos que ditam os metodos que as classes que implementam 
    essa interface devem seguir, o que diferencia interfaces de classes abstratas 
    é que uma interface dita os metodosque as classes que a implementam devem ter, 
    enquanto classes abstrataspodem nao so ter  metodos, mais tambem atributos, 
    alem disso uma classe pode ao mesmo tempo implementar uma interface e herdar 
    uma classe, alem disso é importante saber que todos os metodos criados nas
    interfaces sao abstratas, e nao precisam da keyword abstract
    */
    //Criando minha primeira interface
    interface pessoa {
        public function comer(int $comida);
        public function dormir();
    }
    //Criando uma classe abstrata
    class pessoas {
        //Declarando atributos
        public string $nome;
        public int $idade;
        public int $energia  = 1;
        //Criando meu metodo construtor
        public function __construct($nome, $idade) {
            $this->nome=$nome;
            $this->idade=$idade;
        }
    }
    //Criando classes que vao implementar minha interface
    class criança extends pessoas implements pessoa {
        public function comer(int $comida) {
            $this->energia+=$comida;
            print("{$this->nome} comeu um total de {$comida} e esta com um total de {$this->energia} energia");
        }

        public function dormir() {
            $this->energia++;
            print("{$this->nome} foi dormir");
        }
    }

    class adulto extends pessoas implements pessoa {
        public function comer(int $comida) {
            $this->energia+=$comida;
            print("{$this->nome} comeu um total de {$comida} e esta com um total de {$this->energia} energia");
        }

        public function dormir() {
            $this->energia++;
            print("{$this->nome} foi dormir");
        }
    }

    class idoso extends pessoas implements pessoa {
        public function comer(int $comida) {
            $this->energia+=$comida;
            print("{$this->nome} comeu um total de {$comida} e esta com um total de {$this->energia} energia");
        }

        public function dormir() {
            $this->energia++;
            print("{$this->nome} foi dormir");
        }
    }
    //Criando meus objetos
    $Criança = new criança("Hugo", 10);
    $Adulto = new adulto("John", 32);
    $Idoso = new idoso("Valdemar", 75);
    $pessoas = [$Criança, $Adulto, $Idoso];

    foreach($pessoas as $p){
        $comida = random_int(1, 50);
        $p->comer($comida);
        print("\n");
        $p->dormir();
        print("\nEnergia:".$p->energia."\n\n");
    }
    /*Criando outra interface e mostrando informações 
    na tela de forma mais interesante*/
    interface animal {
        public function makeSound();
    }
    //Definindo classes
    class gato implements animal {
        public function makeSound() {
            print("Meow");
        }
    }

    class cachorro implements animal {
        public function makeSound() {
            print("AuAu");
        }
    }

    class porco implements animal {
        public function makeSound() {
            print("Onhk");
        }
    }
    //Criando os objetos
    $gato = new gato();
    $cachorro = new cachorro();
    $porco = new porco();
    $animais = [$gato, $cachorro, $porco];
    //Exibindo na tela
    foreach($animais as $a){
        $a->makeSound();
        print("\n");
    }
?>