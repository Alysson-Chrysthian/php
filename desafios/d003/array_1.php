<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $carros = [
            ["Volvo", 22, 18],
            ["BMW", 15, 13],
            ["Saab", 5, 2],
            ["Land Rover", 17, 15]
        ];
        for ($i=0;$i<count($carros);$i++) {
            print("<h3>"."Number ".($i+1)."</h3>");
            print("<ul>");
            for ($x=0;$x<count($carros[$i]);$x++) {
                print("<li>".$carros[$i][$x]."</li>");
            }
            print("</ul>");
        }
    ?>
</body>
</html>