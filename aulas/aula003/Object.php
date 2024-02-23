<?php
class Veiculo {
        public $cor;
        public $marca;
        public $preço;
        public function __construct($cor, $marca, $preço) {
            $this->cor = $cor;
            $this->marca = $marca;
            $this->preço = $preço;
        }
        public function MostrarCarro() {
            return "A cor do carro selecionado foi ".$this->cor." A marca é ".$this->marca." e seu preço foi ".$this->preço;
        }
    }

    $MeuCarro = new Veiculo("Azul", "Toyota", 70000);
    echo $MeuCarro->MostrarCarro();
?>