<?php
    require_once "funções/FuncValidação.php";
    session_start();
    //Verificando se ja esta logado
    if (isset($_SESSION["NivelAcesso"])) {
        header("location: paginas/CadastradoPage.php");
        exit();
    }

    $_SESSION["user"] = [
        "nome" => "Alysson",
        "senha" => "Ac102030--",
        "acesso" => "usuario"
    ];
    $_SESSION["adm"] = [
        "nome" => "Augusto",
        "senha" => "Adm123--",
        "acesso" => "administrador"
    ];

    $user = $_SESSION["user"];
    $adm = $_SESSION["adm"];

    $_SESSION["nome"] = null;
    $_SESSION["senha"] = null;

    $nome = $_SESSION["nome"];
    $senha = $_SESSION["senha"];
    $erro;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["NivelAcesso"] = null;
        //Pegando os valores
        $nome = ValidarInput($_POST["nome"]);
        $senha = ValidarInput($_POST["senha"]);
        //Validando senha
        $nomeVal = ValidarNome($nome);
        $SenhaVal = ValidarSenha($senha);
        //Retornando o erro
        if (!$nomeVal) {
            $erro = "<strong>nome</strong>";
        }
        if (!$SenhaVal) {
            $erro = "<strong>senha</strong>";
        }
        if (!$nomeVal && !$SenhaVal) {
            $erro = "<strong>nome</strong> e/ou <strong>senha</strong>";
        }
        //Definindo a msg de erro
        if (isset($erro)) {
            $MsgErro = "campo $erro prenchido de forma invalida";
        }

        if (!isset($erro)) {
            //Verificando se os dados correspondem
            if (
                ($user["senha"] != $senha || $user["nome"] != $nome) &&
                ($adm["senha"] != $senha || $adm["nome"] != $nome)
            ) {
                $erro = "";
                $MsgErro = "o usuario ou senha inseridos não correspondido";
            }
            //Pegando o nivel de acesso
            //Redirecionando para pagina correspondente
            //Verificando se é usuario ou adm
            else if ($user["senha"] == $senha && $user["nome"] == $nome) {
                $_SESSION["NivelAcesso"] = false;
                header("location: paginas/CadastradoPage.php");
                exit();
            }
            else if ($adm["senha"] == $senha && $adm["nome"] == $nome) {
                $_SESSION["NivelAcesso"] = true;
                header("location: paginas/CadastradoPage.php");
                exit();
            }
        }
    } 
?>