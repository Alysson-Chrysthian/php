<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pasta = "arquivos/";
        $diretorio = dir($pasta);   
        while($arquivo = $diretorio -> read()) {
            ?>
                <a href="<?php print $pasta.$arquivo ?>"><?php print $arquivo ?></a>
            <?php
        }
        $diretorio -> close();
    ?>
</body>
</html>