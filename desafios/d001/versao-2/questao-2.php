<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2</title>
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
    <form action="questao-2.php" method="get">
        <fieldset>
            <legend>Formulario</legend>
            <div>
                <input type="number" name="numero" id="numeroid" step="0.1" placeholder="Insira o numero" required>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
            <div>
                <input type="text" name="result" id="resultid" value="<?php
                    if ($_GET) {
                        $numero = $_GET["numero"];

                        if ($numero >= 0) {
                            echo "Positivo";
                        } else {
                            echo "Negativo";
                        }
                    }
                ?>" readonly style="text-align: center;">
            </div>
        </fieldset>
    </form>
</body>
</html>