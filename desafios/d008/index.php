<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site feito para treinar o back-end, ultimo projeto antes de ir para MySql">
    <meta name="author" content="AlyssonCPC">
    <title>Document</title>        
    <link rel="stylesheet" href="estilos/style.css">
    <?php require_once "scripts/cadastro.php"; ?>
</head>
<body>
    <main>
        <form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="post">
            <div>
                <!--Campo de texto para nome-->
                <label for="nomeid">Nome*</label>
                <br>
                <input type="text" name="nome" id="nomeid" autocomplete="off" value="<?php print $nome ?>">
            </div>
            <div>
                <!--Campo de texto para senha-->
                <label for="senhaid">Senha*</label>
                <br>
                <input type="text" name="senha" id="senhaid" autocomplete="off" value="<?php print $senha ?>">
            </div>
            <div id="interaçãoForm">
                <!--Botao para enviar o formulario-->
                <input type="submit" value="Cadastrar" class="botao">
                <span>/</span> 
                <!--Botao para limpar todos os campos do formulario-->
                <input type="reset" value="Limpar" class="botao">
            </div>
            <!--Div para aparecer a mensagem de erro-->
                <?php
                    if (isset($erro)) {
                ?>
            <div id="erro">
                <?php
                        print($MsgErro);
                    }
                ?>
            </div>
        </form>
    </main>
</body>
</html>