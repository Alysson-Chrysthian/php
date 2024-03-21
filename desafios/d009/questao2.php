<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<?php
    $quantLetras = "";

    if ($_GET) {
        $frase = $_GET["frase"];
        $quantLetras = strlen($frase);
    }
?>
<body>
    <main>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="get">
            <div>
                <input type="text" name="frase" id="fraseid" placeholder="Digite uma frase" required value="<?php print isset($frase) ? $frase : null ?>">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
            <div>
                <input type="text" name="resul" id="resulid" placeholder="Quantidade de letras" readonly value="<?php print $quantLetras ?>">
            </div>
        </form>
    </main>
</body>
</html>