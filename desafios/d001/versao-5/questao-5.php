<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }
        
        form {
            width: 400px;
            text-align: center;
            margin: auto;
            margin-top: 10px;
        }

        form div {
            margin: 5px 0px;
        }

        form input {
            padding: 10px;
            border-radius: 5px;
            width: 190px;
        }

        form input::placeholder {
            font-weight: bold;
            font-size: 1.1em;
        }

        form input[type="submit"] {
            width: 100px;
        }

        form fieldset {
            margin-bottom: 10px;
        }

        form legend {
            margin: 0px 10px;
            font-weight: bolder;
            font-size: 1.5em;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="questao-5.php" method="get">
        <div>
            <input type="number" name="peso" id="pesoid" placeholder="Peso" step="0.01" required>
        </div>
        <div>
            <input type="number" name="alt" id="altid" placeholder="Altura" step="0.01" required>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        <div>
            <input type="text" name="resul" id="resulid" placeholder="Categoria" readonly value=
            "<?php
                if ($_GET) {
                    $peso = $_GET["peso"];
                    $altura = $_GET["alt"];

                    if ($peso >= 50 && $peso < 60 && $altura < 1.70) {
                        echo "Novato";
                    } else if (($peso >= 60 && $peso <= 80) && ($altura >= 1.70 && $altura < 1.90)) {
                        echo "Profissional";
                    }
                }
            ?>">
        </div>
    </form>
</body>
</html>