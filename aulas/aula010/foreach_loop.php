<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        .secret {
            font-weight: bolder;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
        /*Nunca utilizar o nome do array como nome de referencia no foreach*/
        /*Foreach serve para exibir os valores de um array*/
        echo strtoupper("<h1>Pessoas Cadastradas</h1>");
        $pessoas = array(
            "Alysson",
            "Pedro", 
            "Sandoval", 
            "Guilherme", 
            "Vinicius", 
            "Vitor"
        );
        foreach ($pessoas as $Value) {
            echo $Value."<br>";
        }
        
        /*Alterações feitas no array dentro do foreach não passam para o array original*/
        echo strtoupper("<h1>Pessoas cadastradas + Anonimas</h1>");

        foreach ($pessoas as $Value) {
            if ($Value == "Alysson" || $Value == "Vinicius") {
                $Value = "<span class=\"secret\">Secreto</span>";
            }
            echo "$Value <br>";
        }

        var_dump($pessoas);
        echo "<br><br>";
        #porem se você utilizar o & antes da referencia tbm alterara no array original
        foreach ($pessoas as &$Value) {
            if ($Value == "Alysson" || $Value == "Vinicius") {
                $Value = "<span class=\"secret\">Secreto</span>";
            } 
            echo "$Value <br>";
        }
        
        var_dump($pessoas);

        /*Foreach em arrays por indexagem de keys*/
        echo strtoupper("<br><h1>Pessoas Cadastradas</h1>");
        $pessoas = array(
            "Alysson" => 15,
            "Pedro" => 16,
            "Sandoval" => 15,
            "Guilherme" => 14,
            "Vinicius" => 17,
            "Vitor" => 14
        );

        foreach ($pessoas as $key => $value) {
            echo $key." ".$value."<br>";
        }

        /*Foreach com classes*/
        class Cliente {
            public $nome;
            public $idade;
            public $email;
            public $senha;
            public $cpf;

            public function __construct($nome, $idade, $email, $senha, $cpf) {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->email = $email;
                $this->senha = $senha;
                $this->cpf = $cpf;
            }
        }

        $MyClient = new Cliente(
            "Alysson", 
            15, 
            "Alysson.chaves@aluno.ce.gov.br",
            "Ac102030--__",
            "604.483.803-07"
        );

        echo "<br><h1>CLIENTE-1</h1>";
        foreach ($MyClient as $Atribute => $Value) {
            echo "$Atribute: $Value <br>";
        }

        /*Uma sintaxe alternativa*/
        echo strtoupper("<br><h1>Sintaxe Alternativa</h1>");
        foreach ($MyClient as $Atribute => $Value) :
            echo "$Atribute: $Value <br>";
        endforeach;
    ?>
</body>
</html>