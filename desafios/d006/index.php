<?php
    if (isset($_COOKIE["contador"])) {
        $cont = $_COOKIE["contador"] + 1;
    } else {
        $cont = 2;
    }
    $tempo = time() + (3600*24*7*4*12);
    setcookie("contador", $cont, $tempo);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["contador"])) {
            print("Você ja visitou o nosso site ".$_COOKIE["contador"]." vezes este ano");
        } else {
            print("Você visitou nosso site pela primeira vez este ano");
        }
    ?>
</body>
</html>