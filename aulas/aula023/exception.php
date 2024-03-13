<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Inicializando a variavel
        $numero = "1";
        //Tenta executar esse comando
        try {
            if (is_string($numero)) {
                throw new Exception("Tipo Invalido");
            }
        }
        //Após dar erro executa esse aqui 
        catch(Exception $e) {
            print("Digite um numero valido");
        }
        //e no final executa o finally
        finally {
            print("<br>Obrigado por escolher nossos serviços, Programa finalizado com sucesso");
        }
    ?>
</body>
</html>