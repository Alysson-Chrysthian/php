<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $datas = "A data atual é 19/14/1244 e ontem foi 12/41/4151, e o meu cpf é 141.435.252-25 e o do meu amigo é 142.143.414-11";
        $regex_data = "|([0-9]{2})[/]([0-9]{2})[/]([0-9]{4})|";
        $regex_data_2 = "|[0-9]{3}[.][0-9]{3}[.][0-9]{3}[-][0-9]{2}|";
        echo preg_match_all($regex_data, $datas);
        echo "<br>";
        echo preg_match_all($regex_data_2, $datas);
        echo "<br>";
        echo preg_replace($regex_data, "$1-$2-3", $datas);
    ?>
</body>
</html>