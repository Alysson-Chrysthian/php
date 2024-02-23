<?php
    $primeiro_argumento = "Olá";
    $segundo_argumento = "Mundo!";

    echo($primeiro_argumento.", ".$segundo_argumento)."\n";
    print($primeiro_argumento.", ".$segundo_argumento)."\n";
    //note que nao faz diferença utilizar parenteses ou não
    echo $primeiro_argumento.", ".$segundo_argumento."\n";
    print $primeiro_argumento.", ".$segundo_argumento."\n";
    //a função print é a unica das duas que da retorno
    $escrever =  print("A função print pode retornar o valor de ");
    echo($escrever);
?>