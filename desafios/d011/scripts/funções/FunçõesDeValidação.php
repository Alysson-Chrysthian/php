<?php
    //Função para formatar inputs
    function ValidarInput($input) {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return $input;
    }

    //Função para Validar nome
    function ValidarNome(string $nome) {
        //Regex para nome
        $RegexNome = "/^[A-za-záéúíãõ ]*$/i";
        if (!preg_match($RegexNome, $nome)) {
            $nome = false; 
        }
        return $nome;
    }

    //Função para Validar data
    function ValidarData(string $data) {
        $RegexData = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/i";
        if (preg_match($RegexData, $data)) {
            $ArrayData = explode("/", $data);
            //Array Para Verificar se a data é valida
            $ArrayVerifyData = [
                31,
                12,
                (int) date("Y")
            ];
            //Array com a data de hoje
            $ArrayDataAtual = [
                (int) date("d"),
                (int) date("m"),
                (int) date("Y")
            ];
            //Transformando os valores do array data em numeros inteiros
            for ($i=0;$i<count($ArrayData);$i++) {
                $ArrayData[$i] = (int) $ArrayData[$i];
            }
            //Verficando se a data é valida
            for ($i=0;$i<count($ArrayVerifyData);$i++) {
                if ($ArrayData[$i] > $ArrayVerifyData[$i]) {
                    $data = false;
                }
            }
            //Verificando se a data não é uma data futura
            if ($ArrayData[2] > $ArrayDataAtual[2]) {
                $data = false;
            }
            else if ($ArrayData[2] == $ArrayDataAtual[2]) {
                for ($i=0;$i<(count($ArrayData)-1);$i++) {
                    if ($ArrayData[$i] > $ArrayDataAtual[$i]) {
                        $data = false;
                    }
                }
            }
        } else {
            $data = false;
        }
        return $data;
    }
?>