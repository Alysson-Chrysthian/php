<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="nomeid">Nome:</label>
            <br>
            <input type="text" name="nome" id="nomeid">
        </div>
        <div>
            <label for="idadeid">Idade:</label>
            <br>
            <input type="number" name="idade" id="idadeid">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php include "vars/vars.php"; ?>
</body>
</html>