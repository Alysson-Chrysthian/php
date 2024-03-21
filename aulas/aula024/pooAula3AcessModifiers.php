<?php
    //Criando classe dvds
    class Dvds {
        //definindo os atributos
        public string $titulo;
        public float $preço;
        private int $estoque;
        //definindo os metodos da class
        //Metodo construtor
        public function __construct(string $titulo, float $preço, int $estoque) {
            $this->titulo=$titulo;
            $this->preço=$preço;
            $this->estoque=$estoque;
        }
        //metodo para alugar cd
        public function Alugar() {
            $this->estoque--;
        }
        //metodo para ver quantos cds ainda tem no estoque
        public function ChecarEstoque() {
            return $this->estoque;
        }
    }
    //adicionando um novo dvd a classe dvds
    $Dvd = new Dvds(
        "Exterminador do futuro",
        49.99,
        30
    );
    //Alugando Dvd
    $Dvd->Alugar();
    //Retornando quantos dvds ainda tem no estoque
    $estoque = $Dvd->ChecarEstoque();
    print("estoque:".$estoque);
    //Area de testes
    foreach($Dvd as $k => $v) {
        print("\n$k:$v");
    }
    /*
    Aqui teriamos um erro pois o atributo estoque tem
    o modificador de acesso setado para privado
    print("\n".$Dvd->estoque);
    */
?>