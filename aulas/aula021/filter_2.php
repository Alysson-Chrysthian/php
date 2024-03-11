<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>
    <?php
        /*TESTES COM STRINGS*/
        $str = "<h1>Hello World</h1>";
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        print($str."<br>");
        /*TESTE COM NUMEROS INTEIROS*/
        $int = 100;
        $int_validate = filter_var($int, FILTER_VALIDATE_INT);
        print($int_validate."<br>");
        if ($int_validate === $int) {
            print("É um numero inteiro valido");
        } else {
            print("Não é um numero inteiro valido");
        }
        print("<br>");
        /*TESTE COM EMAIL*/
        $email = "((//12Aluno@aluno.ce.gov.br";
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        print($email);
        print("<br>");
        
        /*TESTES COM URL*/
        $url = "https://www.w3schools.com";
        $url_validate = filter_var($url, FILTER_VALIDATE_URL)."<br>";
        $url_sanitize = filter_var($url, FILTER_SANITIZE_URL);
        
        if ($url_validate) {
            print("a url inserida é valida"."<br>");
            print($url_validate);
        } else {
            print("a url inserida não é valida"."<br>");
            print($url_validate);
        }
        print($url_sanitize."<br>");
        
        /*TESTES COM ENDEREÇO DE IP*/
        $ip_address = "255.0.0.1";
        #Endereços de ip variam de 0.0.0.0 a 255.255.255.255
        $ip_validate = filter_var($ip_address, FILTER_VALIDATE_IP);

        if ($ip_validate) {
            print("O endereço de ip inserido é valido");
            print("<br>".$ip_validate);
        } else {
            print("O endereço de ip inserido é invalido");
            print("<br>.".$ip_validate);
        }
        print("<br>");
        /*TESTES COM VALORES BOOLEANOS*/
        $boolean = true;
        $boolean_validate = filter_var($boolean, FILTER_VALIDATE_BOOLEAN);
        print($boolean_validate);
    ?>
</body>
</html>