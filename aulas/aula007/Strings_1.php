<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        $String_teste = "Esta é a minha variavel que utilizarei para fazer testes com String";
        $String_teste_vetor = explode(" ", $String_teste);

        #print_f é utilizada para mostrar valroes de uma variavel de forma que seja legivel para nois humanos, normalmente utilizada para mostrar valores de arrays ou objetos

        print_r($String_teste_vetor);
        print(strtoupper($String_teste_vetor[4]));
    ?>
</body>
</html>