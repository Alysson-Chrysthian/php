<?php
    //inclui as funções no meu codigo
    include "funções.php";
    //Variavel que vai verificar se todos os inputs estao prenchidos corretamente
    $Validado;
    $Erro;
    //Variaveis para pegar inputs
    $idade = "";
    $nome = "";
    $Nasc = "";
    $email = "";
    $senha = "";
    $telefone = "";
    $estado = "";
    $cpf = "";
    //Array que vai guardar false caso um dos inputs tenha sido preenchido incorretamente
    $verificados = [
        "nomeVerif" => false,
        "NascVerif" => false,
        "emailVerif" => false,
        "senhaVerif" => false,
        "telVerif" => false,
        "cpfVerif" => false
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = FormatarInput($_POST["nome"]);     //Nome    (A verificar)
        $Nasc = FormatarInput($_POST["nasc"]);    //Idade   (A verificar)
        $email = FormatarInput($_POST["email"]);   //Email   (A Verificar)
        $senha = FormatarInput($_POST["senha"]);   //Senha   (A verificar)
        $telefone = FormatarInput($_POST["tel"]);  //Telefone(A verificar)
        $estado = $_POST["std"];                   //Estado
        $cpf = FormatarInput($_POST["cpf"]);       //Cpf     (A verificar)

        //Verfica input por input para ver se esta tudo nos conformes e guarda o resultado dentro de um array
        $verificados["nomeVerif"] = VerificarDado($nome, 1);
        $verificados["emailVerif"] = VerificarDado($email, 2);
        $verificados["senhaVerif"] = VerificarDado($senha, 3);
        $verificados["telVerif"] = VerificarDado($telefone, 4);
        $verificados["cpfVerif"] = VerificarDado($cpf, 5);
        $verificados["NascVerif"] = VerificarDado($Nasc, 6);

        //Verifica se ouve algum valor errado em algum dos inputs dentro do array
        foreach ($verificados as $k => $v) {
            if (!$v) {
                $Validado = false;
                $Erro = "*Algum valor invalido inserido";
                break;
            }
            $Validado = true;
            continue;
        }
        //se tiver tudo nos conformes é mandado para a proxima pagina
        if ($Validado) {
            $idade = PegarIdade($Nasc);
            //Passando todos os dados para um arquivo json
            $Informações = [
                "nome" => $nome,
                "idade" => $idade,
                "email" => $email,
                "senha" => $senha,
                "cpf" => $cpf,
                "telefone" => $telefone,
                "estado" => $estado
            ];
            $InformaçõesJson = json_encode($Informações);
            //Tentando abrir o arquivo json
            try {
                $ArqJson = fopen("transportador.json","x+");
            }            
            //Abrindo ele em caso de falha
            catch(Exception $e) {
                $ArqJson = fopen("transportador.json", "w+");
            }
            finally {
                //escrevendo as informações no arquivo
                rewind($ArqJson);
                fwrite($ArqJson, $InformaçõesJson);
                //Fechando o arquivo
                fclose($ArqJson);
                //Mudando de pagina
                header("location: pagina.php");
                exit();
            }
        } else {
            print("<p style=\"color: red;\">$Erro</p>");
        }
    }
?>