<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 4</title>
    <link rel="stylesheet" href="estilos/style.css">
    <style>
        div {
            display: inline-block; 
        }
    </style>
</head>
<?php
    $data = "";
    $erro = null;
    $RegexData = "/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/u";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        if (preg_match($RegexData, $data)) {
            $data = explode("/", $data);
            if ((int) $data[0] > 31 || (int) $data[1] > 12) {
                $erro = "dia ou mês inserido é invalido";
            }
        } else {
            $erro = "data inserido com formatação invalida";
        }
    }
?>
<body>
    <main>
        <form action="<?php print($_SERVER["PHP_SELF"]) ?>" method="post">
            <div>
                <input type="text" name="data" id="dataid" placeholder="dd/mm/yyyy" required>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
            <br>
            <div>
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($erro)) {
                            print($erro);
                        } else {
                            foreach ($data as $k => $v) {
                                switch ($k) {
                                    case 0:
                                        print("Dia: $v<br>");
                                        break;
                                    case 1:
                                        print("Mês: $v<br>");
                                        break;
                                    case 2:
                                        print("Ano: $v<br>");       
                                        break; 
                                }
                            }
                        }
                    }
                ?>
            </div>
        </form>
    </main>
</body>
</html>