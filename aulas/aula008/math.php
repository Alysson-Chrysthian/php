<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <form action="math.php" method="get">
        <div>
            <input type="number" name="numero" id="numeroid" placeholder="Que numero estou pensando?">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        $Numero_aleatorio = rand(1, 10);
        if ($_GET) {
            $Numero_Player = $_GET["numero"];
            if ($Numero_Player == $Numero_aleatorio) {
                print("Você Venceu!!\u{1F642}");
            } else {
                print("Você Errou!!\u{1F625}<br>o numero que pensei for $Numero_aleatorio");
            }
        }
    ?>
</body>
</html>