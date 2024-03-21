<?php
    trait Registro {
        private static int $contador = 1;
        //Atributos do meu trait
        public string $nome;
        public int $idade;
        public int $id;
        //Metodos do meu trait
        public function __construct($nome, $idade) {
            $this->nome=$nome;
            $this->idade=$idade;
            $this->id=self::$contador;
            self::$contador++;
        }

        public function MostrarInfo() {
            print("Nome: ".$this->nome."<br>\n");
            print("Idade: ".$this->idade."<br>\n");
            print("Id: ".$this->id."<br>\n");
            print("Nivel de acesso: ".self::$nivelAcesso."<br><br>\n\n");
        }
    }
?>