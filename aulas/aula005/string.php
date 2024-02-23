
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        #resultado {
            background-color: blue;
            display: inline;
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <form action="string.php" method="POST">
        <div>
            <label for="n1id">Primeiro Numero</label>
            <br>
            <input type="number" name="n1" id="n1id">
        </div>
        <div>
            <label for="n2id">Segundo Numero</label>
            <br>
            <input type="number" name="n2" id="n2id">
        </div>
        <div>
            <label for="n3id">Terceira Numero</label>
            <br>
            <input type="number" name="n3" id="n3id">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $x = $_POST["n1"];
            $y = $_POST["n2"];
            $z = $_POST["n3"];
            function MyFunc() {
                global $x, $y;
                $y += $x + $y;
            }
        
            for($i = 0; $i < $z; $i++) {
                MyFunc();
            }
        
            echo "<p id='resultado'>$y</p>";
        }
    ?>
</body>
</html>