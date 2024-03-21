<?php
    //Criando a classe abstrata
    /*é importante notar que é impossivel você
    instanciar objetos em uma classe abstrata*/
    abstract class frutas {
        //Definindo os atributos da minha classe
        public $nome;
        public $vali;
        //Definindo os metodos
        public function __construct($nome, $vali) {
            $this->nome=$nome;
            $this->vali=$vali;
        }
        public abstract function ExibirFruta() : string;
    }

    //Criando classes filhas
    class FrutasSilvestres extends frutas {
        //Definindo os metodos obrigatorios devido a classe pai
        public function ExibirFruta() : string {
            $nome = $this->nome;
            $vali = $this->vali;
            return "A fruta silvestre $nome tem validade de $vali";
        }
    }
    class FrutasExóticas extends frutas {
        public function ExibirFruta() : string {
            $nome = $this->nome;
            $vali = $this->vali;
            return "A fruta exótica $nome tem validade de $vali";
        }
    }
    //Tentando exibir isso na tela
    $FrutaSilvestre = new FrutasSilvestres("Cereja", "5 dias\n");
    $FrutaExótica = new FrutasExóticas("Pitaia", "3 dias\n");
    //Exibindo o metodo abstrato da classe FrutasSilvestres
    print($FrutaSilvestre->ExibirFruta());
    //Exibindo o metodo abstrato da classe FrutasExoticas
    print($FrutaExótica->ExibirFruta());

    /*Classes filho pode definir argumentos opcionais que nao
    foram definidos nos metodos abstratos da classe pai*/
    abstract class car {
        public $nome;
        public $modelo;
        public $dono;

        public function __construct($nome, $modelo) {
            $this->nome=$nome;
            $this->modelo=$modelo;
        }
        public abstract function DefinirDono($NomeDono) : string;
        public abstract function ExibirCarro() : void;
        //void é sem retorno
    }
    //Definindo classes filho
    class Lamborguini extends car {
        public function DefinirDono($NomeDono) : string {
            $this->dono=$NomeDono;
            return $NomeDono;
        }
        public function ExibirCarro() : void {
            print("O nome do carra é {$this->nome} e seu modelo é {$this->modelo}");
        }
    }
    //Instanciando objetos e testando
    $CarroLamborguini = new Lamborguini("Huracan", "SUV Urus");
    $dono = $CarroLamborguini -> DefinirDono("Alysson");
    $CarroLamborguini -> ExibirCarro();
    print(" e seu dono é $dono");
?>