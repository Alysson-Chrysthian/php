<?php
    // Seção iniciada
    session_start();
    if ($_GET) {
        $_SESSION["favcor"] = $_GET["cor_de_fundo"];
    }
?>
<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <style>
        body {
            background-color:<?php print $_SESSION["favcor"] ?>;
        }
    </style>
</head>
<body>
    <h1>Configurações</h1>
    <form action="<?php print($_SERVER["PHP_SELF"]) ?>" method="get">
        <h2>Plano de Fundo</h2>
        <select name="cor_de_fundo" id="cor_de_fundo_id">
            <option value="yellow">Amarelo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="red">Vermelho</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>