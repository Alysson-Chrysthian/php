<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>
    <nav>
        <?php 
            include "menu.php";
            #alem disso ele tambem funciona com html e nao so com php
        ?>
    </nav>
    <footer>
        <?php 
            include "footer.php"; 
            #você pode usar include para dividir seu codigo entre arquivos ou modularizar seu site
        ?>
    </footer>
</body>
</html>