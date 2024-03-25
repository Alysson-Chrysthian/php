<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<?php
    $arquivoBuscado = "";
    $conteudo = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Verificando se o valor do input pesquisa nao é nulo
        if (isset($_POST["pesquisa"])) {
            //procurando o nome do arquivo digitado na pasta arquivos
            $arquivoBuscado = strtoupper($_POST["pesquisa"]).".txt";
            $arquivoBuscado = str_replace(" ", "", $arquivoBuscado);
            //colocando o conteudo do arquivo dentro de uma variavel
            if (file_exists("arquivos/$arquivoBuscado")) {
                $conteudo = file_get_contents("arquivos/$arquivoBuscado");
                //Substituindo todos os \n do arquivo por <br>
                $conteudo = str_replace("\n", "<br>", $conteudo);
            }
            //colocando uma mensagem de erro para caso o arquivo nao exista 
            else {
                $conteudo = "Arquivo buscado não existe";
            }
        } 
        //mensagem de erro para caso o valor do input pesquisa seja nulo
        else {
            $conteudo = "arquivo buscado invalido";
        }
    }
?>
<body>
    <main>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="post">
            <div>
                <input type="text" name="pesquisa" id="pesquisaid">
                <input type="submit" value="pequisar">
            </div>
        </form>
        <div id="resulid"><?php print($conteudo); ?>
        </div>
    </main>
</body>
</html>