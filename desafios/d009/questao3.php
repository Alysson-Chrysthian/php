<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3</title>
    <link rel="stylesheet" href="estilos/style.css">
    <style> 
        div input#numVerifyid {
            transform: translateX(37px);
        }
    </style>
</head>
<?php
    $cep = $numVerify = "";

    $RegexCep = "/^([0-9]{5})\-([0-9]{3})$/u";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cep = $_POST["cep"];
        if (preg_match($RegexCep, $cep)) {
            $numVerify = substr($cep, -3);
        } else {
            $numVerify = "CEP invalido inserido";
        }
    }
?>
<body>
    <main>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="post">
            <div class="inline">
                <label for="cepid">CEP</label>
                <input type="text" name="cep" id="cepid" placeholder="55555-555" required value="<?php print($cep) ?>">
            </div>
            <div class="inline">
                <input type="submit" value="Enviar">
            </div>
            <div>
                <input type="text" name="numVeify" id="numVerifyid" placeholder="Numero de Verificação" value="<?php print($numVerify) ?>">
            </div>
        </form>
    </main>
</body>
</html>