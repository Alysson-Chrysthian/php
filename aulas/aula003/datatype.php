<?php
    $a = 10;
    $b = "Hello, world!";
    $c = 'Hello, world!';

    var_dump($a, $b, $c);
    #var_dump nao retorna nada, so exibe na tela o tipo e o conteudo de uma variavel

    $carros = array("Toyota", "Mercedes", "Lamborguini");
    var_dump($carros);

    #variavel do tipo null
    $d;
    $e = null;
    var_dump($d, $e);

    #Abaixo duas formas de mudar o tipo de uma variavel
    $f = 5;
    var_dump($f); #f aqui é um int
    $f = "Alysson";
    var_dump($f); #ja aqui, foi convertido para uma string

    #a outra forma é pro casting, onde você nao muda o valor da variavel e sim so seu tipo
    $g = 5;
    var_dump($g); # aqui g é um integer, 5
    $g = (string) $g;
    var_dump($g); # ja aqui g é uma string, "5"
?>