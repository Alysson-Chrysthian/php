<?php
    //Iterable
    function mostrarIterable(iterable $Iteração):void {
        foreach ($Iteração as $k => $v) {
            print("$k: $v\n");
        }
    }

    $array = ["Alysson", "Pedro", "João"];
    mostrarIterable($array);

    //Retornando um iterador
    function retornarIterable(...$nomes):iterable {
        return $nomes;
    }
    $array = retornarIterable("Alysson", "Pedro", "Guilherme");
    mostrarIterable($array);

    foreach ($array as $v) {
        $atual = current($array);
        $chaves = key($array);
        print($atual);
        print($chaves);
        next($array);
    }
?>