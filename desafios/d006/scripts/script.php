<?php
    /*DEFININDO FUSO HORARIO*/
    date_default_timezone_set("America/Sao_Paulo");
    /*DEFININDO FUNÇÕES*/
    function ValidarInput($arg) {
        $arg = trim(htmlspecialchars($arg));
        return $arg;
    }
    /*DEFININDO VARIAVEIS DE ERRO E REGEX*/
    $nome_erro = $mail_erro = $senha_erro = $nasc_erro = "";
    $nome = $mail = $senha = $nasc = "";
    $nome_padrão = "/^[A-z-' ]*$/i";
    $data_padrão = "/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/i";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*ATRIBUIÇÃO DOS VALORES DOS INPUTS DO FORMULARIO*/
        $nome = ValidarInput($_POST["nome"]);
        $mail = ValidarInput($_POST["email"]);
        $senha = ValidarInput($_POST["senha"]);
        $nasc = ValidarInput($_POST["nasc"]);
        /*VALIDAÇÃO DOS VALORES*/
        /*VALIDAÇÃO NOME*/
        if (strlen($nome) < 3 || !preg_match($nome_padrão, $nome)) {
            $nome_erro = "Formatação de nome invalida";
        } else {
            $nome_erro = "";
        }
        /*VALIDAÇÃO EMAIL*/
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mail_erro = "Formatação de email invalida";
        } else {
            $mail_erro = "";
        }
        /*VALIDAÇÃO SENHA*/
        if (strlen($senha) >= 8) {
            /*DEFININDO AS VARIAVEIS DE VERIFICAÇÃO*/
            $validação = false;
            $maiusculas = 0;
            $minusculas = 0;
            $numeros = 0;
            $CaracteresEspeciais = 0;
            for ($i=0;$i<strlen($senha);$i++) {
                /*VERIFICA SE O CARACTERE ATUAL DA SENHA É UM NUMERO*/
                if (is_numeric($senha[$i])) {
                    $numeros++;
                    continue;
                } else {
                    /*VERIFICA SE O CARACTERE ATUAL DA SENHA É UM CARACTERE ESPECIAL*/
                    if (ctype_punct($senha[$i])) {
                        $CaracteresEspeciais++;
                        continue;
                    } else {
                        /*VERIFICA SE O CARACTERE ATUAL DA SENHA É MAIUSCULO*/
                        if (ctype_upper($senha[$i])) {
                            $maiusculas++;
                            continue;
                        }
                        /*VERIFICA SE O CARACTERE ATUAL DA SENHA É MINUSCULO*/ 
                        elseif (ctype_lower($senha[$i])) {
                            $minusculas++;
                            continue;
                        }
                    }
                }
            } 
            /*VERIFICA SE TODAS AS VARIAVEIS DE VALIDAÇÃO FORAM MODIFICADAS*/
            if (
            $maiusculas>0 && 
            $minusculas>0 && 
            $numeros>0 && 
            $CaracteresEspeciais>0) {
                /*CASO TODAS AS VARIAVEIS DE VERIFICAÇÃO TENHAM SIDO MODIFICADAS QUER DIZER QUE VALIDAÇÃO É VERDADEIRO*/
                $validação = true;
            } else {
                $validação = false;
            } 
            /*ATRIBUI UM VALOR A VARIAVEL SENHA_ERRO CASO VALIDAÇÃO SEJA FALSO*/
            if ($validação == false) {
                $senha_erro = "Formatação de senha invalido";
            } 
            /*CASO ESTEJA TUDO NOS CONFORMES O VALOR INICIAL DELA SERA REATRIBUIDO*/
            else {
                $senha_erro = "";
            }
        }
        /*CASO A SENHA TENHA MENOS DE 8 DIGITOS SENHA_ERRO TAMBEM TERA SEU VALOR ATRIBUIDO*/ 
        else {
            $senha_erro = "Formatação de senha invalido";
        }
        /*VALIDAÇÃO E FORMATAÇÃO DA DATA DE NASCIMENTO*/
        $AnoNasc = preg_replace($data_padrão, "$1", $nasc);
        $idade =  ((int) date("Y")) - ((int) $AnoNasc);
        if ($idade > 130) {
            $nasc_erro = "Data de nascimento invalida";
        } elseif ($idade < 18) {
            $nasc_erro = "Você precisa ter mais de 18 anos";
        } else {
            $nasc_erro = "";
        }
        /*CASO TUDO ESTEJA NOS CONFORMES, REDIRECIONA O USUARIO PARA OUTRA PAGINA*/
        if (
            $nome_erro=="" && 
            $senha_erro=="" &&
            $mail_erro=="" && 
            $nasc_erro==""
            ) {
            header("Location: homepage.php");
            exit();
        }
    }
?>