<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
        body {
            font-family: arial, verdana, sans-serif;
        }

        form {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        input {
            padding: 15px;
            margin: 5px 0px;
        }

        #resul {
            width: 200px;
            border: 1px solid black;
            height: 50px;
            display: flex;
            align-items: center;
        }

        li {
            transform: translate(-15px, -10px);
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>
<?php 
    if ($_POST) {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = htmlspecialchars($_POST["idade"]);
        $Pessoas_Cadastradas = [];
    }
?>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>CADASTRO</legend>
            <div>
                <input type="text" name="nome" id="nomeid" placeholder="Nome">
            </div>
            <div>
                <input type="number" name="idade" id="idadeid" placeholder="Idade">
            </div>
            <div style="text-align: center;">
                <input type="submit" value="Enviar">
            </div>
            <div id="resul">
                <?php
                    if ($_POST) {    
                        if (empty($nome) || empty($idade)) {
                            print("<p style=\"color: red;\">Nome ou idade inserido esta invalido</p>");
                        } else {
                            array_push($Pessoas_Cadastradas, ["nome"=>$nome, "idade"=>$idade]);
                            print("<p style=\"color: green;\">Pessoa Cadastrada com sucesso</p>");
                        } 
                    }
                ?>
            </div>
        </fieldset>
        <fieldset style="text-align: left;">
            <legend>PESSOAS CADASTRADAS</legend>
            <?php 
                if ($_POST) {
                    for ($i=0;$i<count($Pessoas_Cadastradas);$i++) {
                        print("<h2>".$Pessoas_Cadastradas[$i]["nome"]."</h2>");
                        print("<ul>");
                        foreach ($Pessoas_Cadastradas[$i] as $k => $v) {
                            print("<li>$k: $v</li>");
                        }
                        print("</ul>");
                    }
                }
            ?>
        </fieldset>
    </form>
</body>
</html>