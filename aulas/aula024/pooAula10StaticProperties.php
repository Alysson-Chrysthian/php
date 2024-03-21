<?php
    class RegistrarUser {
        //Atributo statico
        private static string $TipoDeConta = "Usuario";
        private static int $contador = 1;
        //Criando atributos
        private string $nome;
        private int $idade;
        private int $id;
        public string $tipo;
        //Criando metodos
        public function __construct($nome,$idade) {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->tipo=self::$TipoDeConta;
            $this->id=self::$contador;
            self::$contador++;
        }

        public function MostrarInfo() {
            print("Nome: ".$this->nome."\n");
            print("Idade: ".$this->idade."\n");
            print("Id: ".$this->id."\n");
            print("Conta: ".$this->tipo."\n\n");
        }
    }

    class RegistrarInterprise extends RegistrarUser{
        private static string $TipoDeConta = "empresa";
    }

    $Obj1 = new RegistrarUser("Alysson", 15);
    $Obj2 = new RegistrarUser("Sandoval", 16);
    
    $Obj1->MostrarInfo();
    $Obj2->MostrarInfo();

    $Obj3 = new RegistrarInterprise("Diego", 15);
    $Obj4 = new RegistrarInterprise("Ana", 15);

    $Obj3->MostrarInfo();
    $Obj4->MostrarInfo();
?>