<?php
    //Criando um traits
    trait OlharInfos {
        //Definindo atributos
        public string $nome;
        public int $idade;
        //Definindo funções
        public function __construct($nome, $idade) {
            $this->nome=$nome;
            $this->idade=$idade;
        }
        public function OlharNome() {
            $nome = $this->nome;
            print("Nome:{$this->nome}");
        }
        public function OlharIdade() {
            $idade = $this->idade;
            print("idade:{$this->idade}");
        }
    }
    //Criando classes
    class UsuarioNormal {
        use OlharInfos;
    }

    class UsuarioAdm {
        use OlharInfos;
        public function OlharInfoUserNormal($Obj) {
            try {
                if (!is_object($Obj)) {
                    throw new Exception("Objeto Não Existe", 1);
                }
                $nome = $Obj->nome;
                $idade = $Obj->idade;
                print("nome:$nome\nidade:$idade");
            } catch(Exception $e){
                print("O usuario não existe");
            }
        }
    }
    //Criando objetos
    $User = null;
    $User = new UsuarioNormal("Henrique", 17);
    $Admin = new UsuarioAdm("Alysson", 19);

    $Admin->OlharInfoUserNormal($User);
?>