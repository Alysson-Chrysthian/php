<?php
    function função_1() {
        global $x;
        $x = 19;
    }

    função_1();
    echo "Exemplo de variavel global dentro de função ".$x."\n";
    #todas as variaveis globais sao armazenadas dentro de um array $GLOBALS, a forma de acessar esta logo abaixo
    #é possivel acessar variaveis globais dentro de funções utilizando o $GLOBALS[]
    $y = 10;
    function função_2() {
        echo "exemplo de variavel global sendo utilizado dentro de uma função ".$GLOBALS["y"]."\n";
    }
    
    função_2();

    #utiliza-se o static para manter as variaveis do jeito que estavam após o uso do função
    function função_3() {
        static $x = 0;
        echo $x." ";
        $x++;
    }
    echo "abaixo temos um exemplo de uma variavel static dentro de uma função\n";
    função_3();
    função_3();
    função_3();
?>