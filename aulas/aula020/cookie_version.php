<?php
    $cookie_name = "favcor";
    $validade = time() + (3600*24*7*4*12);
    if ($_GET) {
        $valor = $_GET["favcor"];
        setcookie($cookie_name, $valor, $validade);
        $background = $valor;
    } elseif (isset($_COOKIE[$cookie_name])) {
        $background = $_COOKIE[$cookie_name];
    } else {
        $background = "white";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <style>
        body {
            background-color: <?php echo $background; ?>;
        }
    </style>
</head>
<body>
    <h1>Configurações</h1>
    <form action="<?php print($_SERVER["PHP_SELF"]) ?>" method="get">
        <h2>Cor de fundo</h2>
        <select name="favcor" id="favcorid">
            <option value="yellow">Amarelo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
            <option value="red">Vermelho</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>