<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Advanced</title>
</head>
<body>
    <?php
        /*Validando um inteiro em um range*/
        $idade = 19;
        if (filter_var($idade, FILTER_VALIDATE_INT, ["options" => [
            "min_range" => 1, 
            "max_range" => 17
        ]])) {
            print("você é menor de idade ");
            print(filter_var($idade, FILTER_VALIDATE_INT, ["options" => [
                "min_range" => 1,
                "max_range" => 17
            ]]));
        } else {
            print("você é maior de idade ");
            print(filter_var($idade, FILTER_VALIDATE_INT, ["options" => [
                "min_range" => 1,
                "max_range" => 17
            ]]));
        }
        /*você tambem pode escrever este codigo de forma mais legivel, ao colocar as opções de configuração dentro de uma variavel*/
        print("<br>");
        $idade_options = ["options" => [
            "min_range" => 1, 
            "max_range" => 17
        ]];
        $idade_validate = filter_var($idade, FILTER_VALIDATE_INT, $idade_options);

        if ($idade_validate) {
            print("Você é menor de idade ");
            print($idade_validate);
        } else {
            print("você é maior de idade ");
            print($idade_validate);
        }
        /*UTLIZANDO FLAGS CONSTANTS PARA VALIDAR VALORES*/
        print("<br>");
        $ip_IPV6 = "1fef:12fe:2f13:12fe:aef2:123f:f11f:11ff";
        $ip_IPV6_VALIDATE = filter_var($ip_IPV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
        if ($ip_IPV6_VALIDATE) {
            print("O ip inserido é valido"." ");
            print($ip_IPV6_VALIDATE);
        } else {
            print("O ip inserido é invalido"." ");
            print($ip_IPV6_VALIDATE);
        }
        /*UTILIZANDO FLAGS COM URL*/
        print("<br>");
        $url = "https://www.MyWebSite.com.br/pasta/index.html";
        $url_validate = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
        if ($url_validate) {
            print("A pagina inserida é valida ");
            print($url_validate);
        } else {
            print("A pagina inserida é invalida");
            print($url_validate);
        }
        /*UTLIZANDO TAGS DE CARACTERES ASCII*/
        print("<br>");
        $strASCII = "Hello World éóã";
        $strLowASCIISanitize = filter_var($strASCII, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
        $strHighASCIISanitize = filter_var($strASCII, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

        print($strLowASCIISanitize."<br>");
        print($strHighASCIISanitize);
    ?>
</body>
</html>