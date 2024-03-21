<?php
    //Função para formatar o input do formulario
    function ValidarInput($input):string {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return $input;
    }

    //Função para validar nome
    function ValidarNome($nome):bool {
        $validado = false;
        //REGEX
        $NomeRegex = "/^[A-za-z ]*$/u";
        //Verificar a formatação do nome
        if (preg_match($NomeRegex, $nome) && strlen($nome)>=3) {
            $validado = true;
        }
        return $validado;
    }

    //Função para validar senha
    function ValidarSenha($senha):bool {
        $validado = false;
        if (strlen($senha) >= 8) {
            $maiusculas = false;
            $minusculas = false;
            $numeros = false;
            $CharsEspeciais = false;

            //REGEX
            $CharEspeciaisRegex = "/[!@*&>;:$\-_]/u";

            for ($i=0;$i<strlen($senha);$i++) {
                //Verificando se há caracteres especiais
                if (preg_match($CharEspeciaisRegex, $senha[$i])) {
                    $CharsEspeciais = true;
                    continue;
                }
                //Verificando se há numeros
                if (is_numeric($senha[$i])) {
                    $numeros = true;
                    continue;
                }
                //Verificando se há maisculas
                if ($senha[$i] == strtoupper($senha[$i])) {
                    $maiusculas = true;
                    continue;
                }
                //Verificando se há minusculas
                if ($senha[$i] == strtolower($senha[$i])) {
                    $minusculas = true;
                    continue;
                }
            }
            //Verificando se esta tudo nos conformes
            if (
            $maiusculas &&
            $minusculas && 
            $numeros &&
            $CharsEspeciais
            ) {
                $validado = true;
            }
        } 
        return $validado;
    }
?>