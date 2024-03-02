<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional arrays</title>
    <style>
        form {
            display: grid;
            justify-content: center;
            text-align: center;
        }

        fieldset {
            padding: 20px;
        }

        ul {
            list-style-type: none;
        }
    </style>
</head>
<body>
    <form action="array_2.php" method="post">
        <fieldset>
            <div>
                <select name="carro" id="carro">
                    <option value="0">Volvo</option>
                    <option value="1">BMW</option>
                    <option value="2">Saab</option>
                    <option value="3">Land Rover</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
        <fieldset style="border-top: none;height: 45px;">
            <?php
                if ($_POST) {
                    define ("carros", [
                        ["Volvo", 22, 18],
                        ["BMW", 15, 13],
                        ["Saab", 5, 2],
                        ["Land Rover", 17, 15] 
                    ]);
                    $Carro_Exibir = $_POST["carro"];
                    print("<ul style=\"padding: 0px;margin: 0px;\">");
                    for ($i=0;$i<count(carros[$Carro_Exibir]);$i++) {
                        print("<li>".carros[$Carro_Exibir][$i]."</li>");
                    }
                    print("</ul>");
                }
            ?>
        </fieldset>
    </form>
</body>
</html>