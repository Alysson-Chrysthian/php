<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        
        body > div, form {
            display: flex;
            margin: auto;
            text-align: center;
        }

        form input {
            padding: 10px;
        }

        #resul {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div>
        <form action="index.php" method="get">
            <fieldset>
                <legend>Tabuada</legend>
                <div>
                    <input type="number" name="n1" id="n1id" placeholder="Primeiro Numero">
                </div>
                <div>
                    <input type="number" name="n2" id="n2id"placeholder="Segundo Numero">
                </div>
                <div>
                    <input type="submit" value="Calcular">
                </div>

            </fieldset>
        </form>
    </div>
    <div id="resul">
            <?php
                if ($_GET) {
                    $n1 = $_GET["n1"];
                    $n2 = $_GET["n2"];
                
                    for ($i = 0; $i < $n2+1; $i++) {
                        echo "$n1 x $i = ".($n1 * $i)."<br>";
                }
            }
            ?>
        </div>
</body>
</html>