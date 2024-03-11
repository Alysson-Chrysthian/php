<?php
    $cookieName = "user";
    $user = setcookie($cookieName, "João", time() + ((3600*24)*7),"/");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print($_COOKIE[$cookieName]);
    ?>
</body>
</html>