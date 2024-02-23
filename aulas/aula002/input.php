<!DOCTYPE html>
<html lang="php">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="input.php" method="get">
    <div>
        <label for="nomeid">Nome:</label>
        <br>
        <input type="text" name="nome" id="nomeid">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
    </form>
    <?php
        #isset serve para vereficar se a variavel $_GET não esta vazia
        if (isset($_GET["nome"])) {
            $nome = $_GET["nome"];
            echo("Olá e seja bem vindo ".$nome);
        }
    ?>
</body>
</html>