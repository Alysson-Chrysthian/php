<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão-1</title>
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
    <main>
        <form action="questao-1.php" method="get">
            <fieldset>
                <legend>Notas</legend>
                <div>
                    <input type="number" name="nota1" id="nota1id" placeholder="Primeira Nota" required step="0.1" min="0" max="10">
                </div> 
                <div>
                    <input type="number" name="nota2" id="nota2id" placeholder="Segunda Nota" required step="0.1">
                </div>
            </fieldset>
            <fieldset>
                <legend>Frequencia</legend>
                <div>
                    <input type="number" name="aula_total" id="altot" placeholder="Total de aulas" required>
                </div>
                <div>
                    <input type="number" name="faltas" id="fltid" placeholder="Total de faltas" required>
                </div>
            </fieldset>
            <fieldset>
                <legend>Resultado</legend>
                <div>
                    <input type="submit" value="Enviar">
                </div>
                <div>
                    <input type="text" name="resul" id="resul" value=
                    "<?php
                        if ($_GET) {
                            $nota1 = $_GET["nota1"];
                            $nota2 = $_GET["nota2"];
                            $aulastot = $_GET["aula_total"];
                            $faltas = $_GET["faltas"];

                            $media = ($nota1 + $nota2) / 2;
                            $freq = ($aulastot - $faltas) / $aulastot * 100;

                            if ($media >= 8.5 && $freq >= 70) {
                                echo "Aprovado";
                            } else {
                                echo "Reprovado";
                            }
                        }
                    ?>" 
                    readonly style="text-align: left;">
                </div>
            </fieldset>
        </form>
    </main>
</body>
</html>