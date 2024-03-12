<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <h1>Minha Pagina</h1>
    <?php
        //Abrindo o arquivo json para pegar as informações
        $ArqJson = fopen("transportador.json", "r+");
        $ArqContent = fread($ArqJson, filesize("transportador.json"));
        $JsonArray = json_decode($ArqContent, true);
        fclose($ArqJson);
        foreach ($JsonArray as $k => $v) {
            print("$k:$v<br>");
        }
    ?>
    <a href="index.php">Voltar para pagina de cadastro</a>
</body>
</html>