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
    <form action="questao-4.php" method="get">
        <div>
            <input type="number" name="n1" id="n1id" placeholder="Insira um numero" required>
        </div>
        <div>
            <input type="number" name="n2" id="n2id" placeholder="Insira outro numero" required>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
        <div>
            <input type="text" name="result" id="resultid" value=
            "<?php
                if ($_GET) {    
                    $num1 = $_GET["n1"];
                    $num2 = $_GET["n2"];
                    if ($num1 != $num2) {
                        $maior = max($num1, $num2);
                        echo "o maior numero foi $maior";
                    } else {
                        echo "os numeros são iguais";
                    }
                }
            ?>" readonly>
        </div>
    </form>
</body>
</html>