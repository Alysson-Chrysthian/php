<?php 
    /**
     * VerificarDado(string $Dado, int Tipo)
     *
     * O segundo parametro diz o tipo de verificação que vai ocorrer com o segundo parametro
     * 1-validar nome
     * 2-validar email
     * 3-validar senha
     * 4-validar telefone
     * 5-validar cpf
     * 6-validar data de nascimento
     * qualquer outro valor retornara uma mensagem avisando que voce colocou um numero invalido
     *
     * @param Type $Dado string, $Tipo int
     * @return type boolean
     **/
    function VerificarDado(string $Dado, int $Tipo) {
        switch ($Tipo) {
            //Validação de nome
            case 1:
                $RegexNome = "/^([A-z ])*$/i";
                return preg_match($RegexNome, $Dado);
            //Validação de Email
            case 2:
                $Dado_Validado = filter_var($Dado, FILTER_VALIDATE_EMAIL);
                if ($Dado_Validado) {
                    return true;
                }
                return false;
            //Validação de senha
            /*SENHA REQUISITOS
                -PELO MENOS 8 CARACTERES
                -PELO MENOS 1 CARACTERE ESPECIAL
                -PELO MENOS 1 NUMERO
                -PELO MENOS UMA LETRA MAIUSCULA
                -PELO MENOS UMA LETRA MINUSCULA
            */
            case 3:
                //Criando Variaveis de verificação
                $TamanhoSenha = strlen($Dado);
                $Numeros = 0;
                $Maiusculas = 0;
                $Minusculas = 0;
                $CaracEspec = 0; 
                if ($TamanhoSenha >= 8) {
                    for ($i=0;$i<$TamanhoSenha;$i++) {
                        //Criando variavel de verificação para caracteres especiais
                        $CaracEspecRegex = "/[^\p{L}\p{N}\s]/u";
                        //Verificando caracteres especiais
                        if (preg_match($CaracEspecRegex ,$Dado[$i])) {
                            $CaracEspec = true;
                        }
                        //Verificando Numeros
                        elseif (is_numeric($Dado[$i])) {
                            $Numeros = true;
                        }
                        //Verificando Letras Maiusculas
                        elseif ($Dado[$i] == strtoupper($Dado[$i])) {
                            $Maiusculas = true;
                        }
                        //Verificando Letras Minusculas
                        elseif ($Dado[$i] == strtolower($Dado[$i])) {
                            $Minusculas = true;
                        }
                    }
                    //Verifica se todas as instancias estão presentes na senha
                }
                if (
                $Numeros &&
                $Maiusculas &&
                $Minusculas &&
                $CaracEspec
                ) {
                    return true;
                }   
                return false;
            //Validação de telefone
            case 4:
                $RegexTel = "/(^[0-9]{2})([0-9]{9})$/";
                return preg_match($RegexTel, $Dado);
            //Validação de CPF
            case 5:
                $RegexCpf = "/^([0-9]{3}).([0-9]{3}).([0-9]{3})-([0-9]{2})$/i";
                return preg_match($RegexCpf, $Dado);
            //Validação de data de nascimento
            case 6:
                $RegexData = "/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/i";
                $Dado = str_replace("/", "-", $Dado);
                return preg_match($RegexData, $Dado);
            //Caso o programador digite o segundo parametro errado uma mensagem sera retornada pra ele  
            default:
                return "Valor do segundo parametro invalido";    
        }
    }

    /**
     * FormatarInput($Dado)
     *
     * Remove espaçamentos desnecessarios e codigos htmls do dado fornecido como parametro
     *
     * @param Type $Dado mixed
     * @return type mixed
     **/
    function FormatarInput($Dado) {
        $Dado = htmlspecialchars($Dado);
        $Dado = trim($Dado);
        return $Dado;        
    }

    /**
     * PegarIdade(string $DataNasc)
     *
     * subtrai o ano fornecido pelo o ano atual e retorna a idade da pessoa
     *
     * @param Type $DataNasc string
     * @return type int
     **/
    function PegarIdade(string $DataNasc) {
        $AnoNasc = (int) substr($DataNasc, 6, 4);
        $AnoAtual = (int) date("Y");
        $idade = $AnoAtual - $AnoNasc;
        return $idade;
    }

?>