<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="serviços">Termos de serviço</label>
        <input type="checkbox" name="termos[]" value="serviços">
        <label for="termosuso">Termos de uso</label>
        <input type="checkbox" name="termos[]" value="termosusu">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_GET) {
            $termos = $_GET["termos"];
            foreach ($termos as $v) {
                print($v."<br>");
            }
        }
    ?>
</body>
</html>