<?php
    require_once "funções/FunçõesDeValidação.php";
    session_start();
    if (isset($_SESSION["logado"])) {
        if ($_SESSION["logado"]) {
            header("location: ../paginas/pagina_inicial.php");
            exit();
        }
    }
    //Inicializando varivael que verifica se esta logado
    $_SESSION["logado"] = false;
    //Inicializando as variaveis da sessão
    $_SESSION["nome"] = null;
    $_SESSION["nasc"] = null;
    //Iniciando minha variavel de erro
    $erro = "";
    //Iniciando a validação
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Pegando os valores do formulario
        $nome = ValidarInput($_POST["nome"]);
        $nasc = ValidarInput($_POST["data"]);

        $_SESSION["nome"] = $nome;
        $_SESSION["nasc"] = $nasc;
        //Validando os valores que precisam ser validados
        $nome = ValidarNome($nome);
        $nasc = ValidarData($nasc);

        if (!$nome || !$nasc) {
            $erro = "Nome ou data de nascimento digitados é invalido";
        } else {
            $erro = false;
            $_SESSION["logado"] = true;
            header("location: ../paginas/pagina_inicial.php");
            exit();
        }
    }
?>  