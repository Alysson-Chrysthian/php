<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <?php
        /*JSON É UM TIPO DE ANOTAÇÃO UTILIZADA PARA COMPARTILHAR DADOS ENTRE LINGUAGENS DE PROGRAMAÇÃO DIFERENTE*/
        $pessoas = [
            "Peter" => 32, 
            "Jonh" => 27, 
            "Ben" => 10
        ];
        $pessoas = json_encode($pessoas);
        print($pessoas);
        //ABAIXO TEMOS JSON SENDO USADOS COM COOKIES
        setcookie("Pessoas", $pessoas, time()+3600, "/");
        $cookie = $_COOKIE["Pessoas"];
        print("<br>".$cookie);
        
        $cookie_decode_object = json_decode($cookie);
        print("<br>");
        var_dump($cookie_decode_object);
        
        $cookie_decode_array = json_decode($cookie, true);
        print("<br>");
        var_dump($cookie_decode_array);
        
        foreach ($cookie_decode_array as $k => $v) {
            print("<br>nome:$k idade:$v");
        }
        //JSON COM ARRAY POR INDEXAGEM
        $Alunos = [
            "Alysson",
            "Pedro",
            "Guilherme"
        ];
        $Alunos_Json = json_encode($Alunos);
        print("<br>$Alunos_Json<br>");
        $Alunos_Json = json_decode($Alunos_Json, true);
        var_dump($Alunos_Json);

        foreach ($Alunos_Json as $v) {
            print("<br>$v");
        }
        //TENTANDO LER UM ARQUIVO JSON
        print("<br>");
        $Arq_Json = fopen("json.json", "r+");
        $Content_Json = fread($Arq_Json, filesize("json.json"));
        print($Content_Json."<br>");
        $Content_Json_Decode = json_decode($Content_Json, true);
        print_r($Content_Json_Decode);
        foreach ($Content_Json_Decode as $k => $v) {
            print("<br>$k:$v");
        }
    ?>
</body>
</html>