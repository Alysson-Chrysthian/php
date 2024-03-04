<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
</head>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]);?>" method="post">
        <div>
            <label for="nome">Digite seu nome</label>
            <br>
            <input type="text" name="nome" id="nomeid">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if ($_POST) {
            $nome = htmlspecialchars($_POST["nome"]);
            if (empty($nome)) {
                print("Insira um nome valido");
            } else {
                print("Nome: $nome");
            }
        }
    ?>
</body>
</html>