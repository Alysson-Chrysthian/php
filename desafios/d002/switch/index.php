<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body > div {
            display: flex;
            justify-content: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        fieldset {
            padding: 50px;
        }

        legend {
            font-size: 1.5em;
            font-weight: bolder;
        }

        form input[type="number"], form input[type="text"] {
            padding: 20px;
            margin: 10px 0px;
            text-align: center;
        }

        form input::placeholder {
            font-size: 1.2em;
            font-weight: bold;
        }

        form select {
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        form input[type="submit"] {
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
        }

        form input[type="submit"]:hover {
            background-color: #00000015;
        }
    </style>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <fieldset>
                <legend>Calculadora</legend>
                <div>
                    <input type="number" name="n1" id="n1id" placeholder="Primeiro Numero">
                </div>
                <div>
                    <select name="op" id="opid">
                        <option value="1">Somar</option>
                        <option value="2">Subtrair</option>
                        <option value="3">Multiplicação</option>
                        <option value="4">Divisão</option>
                    </select>
                </div>
                <div>
                    <input type="number" name="n2" id="n2id" placeholder="Segundo Numero">
                </div>
                <div>
                    <input type="submit" value="Calcular">
                </div>
                <div>
                    <input type="text" name="resul" id="resulid" value=
                    "<?php
                        if ($_GET) {
                            $n1 = $_GET["n1"];
                            $n2 = $_GET["n2"];
                            $op = $_GET["op"];

                            switch ($op) {
                                case 1:
                                    echo $n1 + $n2;
                                    break;
                                case 2:
                                    echo $n1 - $n2;
                                    break;
                                case 3:
                                    echo $n1 * $n2;     
                                    break;
                                case 4:
                                    echo max($n1, $n2) / min($n1, $n2);
                                    break;       
                                default:
                                    echo "Selecione uma operação valida";    
                                    break;
                            }
                        }
                    ?>" readonly>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>