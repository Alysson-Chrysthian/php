<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
</head>
<body>
    <?php
        try {
            $num1 = 0;
            $num2 = 2;
            $n = $num2 / $num1;
            print($n);
        } catch(DivisionByZeroError $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            $previous = $e->getPrevious();
            $path = $e->getFile();
            $line = $e->getLine();
            print("Erro<br>$message<br>$code<br>$path<br>$line<br>");
        }
        //Try alinhados
        try {
            try {
                throw new Exception("Meu primeiro erro", 1);
            } catch(Exception $e1) {
                throw new Exception("Meu segundo erro", 2);
            }
        } catch(Exception $e2) {
            print("Ocorreu um erro");
        }
    ?>
</body>
</html>