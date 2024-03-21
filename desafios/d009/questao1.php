<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 1</title>
    <style>
        * {
            font-family: arial;
            font-weight: bold;
        }

        main {
            display: flex;
            justify-content: center;
            color: white;
        }

        form {
            background-color: green;
            border-radius: 15px;
            padding: 30px;
        }

        input {
            margin: 5px 0px;
        }

        div {
            display: inline-block;
        }

        div#peso {
            display: block;
        }
    </style>
</head>
<?php
    function PegarPeso(float $altura, bool $sexo) {
        /**
         * se sexo for verdadeiro entao sexo igual a feminino
         * se sexo for falso entao sexo igual a masculino
         */
        if ($sexo) {
            $peso = (72.7 * $altura) - 58;
        } else {
            $peso = (62.1 * $altura) - 44.7;
        }
        return $peso;
    }

    $altura = null;
    $sexo = null;
    $peso = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["altura"]) || !isset($_POST["sexo"])) {
            $peso = "Altura ou sexo inserido esta invalido";
        } else {
            $altura = $_POST["altura"];
            $sexo = $_POST["sexo"];

            $peso = PegarPeso($altura, $sexo);
        }
    }
?>
<body>
    <main>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="post">
            <div>
                <label for="alturaid">Altura</label>
                <input type="text" name="altura" id="alturaid" required placeholder="Altura em M" step="0.01" value="<?php print $altura ?>">
            </div>
            <div>
                <select name="sexo" id="sexoid">
                    <option selected disabled>Sexo</option>
                    <option value="0">Masculino</option>
                    <option value="1">Feminino</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Peso Ideal">
            </div>
            <div id="peso">
                <label for="peso">PESO IDEAL:</label>
                <input type="text" name="peso" id="pesoid" readonly value="<?php print $peso ?>">
            </div>
        </form>
    </main>
</body>
</html>