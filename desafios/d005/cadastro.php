<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<?php include "scripts/script.php"; ?>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>CADASTRO</legend>
            <div>
                <label for="nomeid">
                    Nome:
                    <span class="erro">
                        <?php print($nome_erro); ?>
                    </span>
                </label> <br>
                <input type="text" name="nome" id="nomeid" value=
                "<?php print($nome); ?>">
            </div>
            
            <div>
                <label for="emailid">
                    Email:
                    <span class="erro">
                        <?php print($mail_erro); ?>
                    </span>
                </label> <br>
                <input type="text" name="email" id="emailid" value=
                "<?php print($mail); ?>">
            </div>

            <div>
                <label for="senhaid">
                    Senha:
                    <span class="erro">
                    <?php print($senha_erro); ?>
                    </span>
                </label> <br>
                <input type="text" name="senha" id="senhaid" value=
                "<?php print($senha); ?>">
            </div>

            <div>
                <label for="nascid">
                    Nascimento:
                    <span class="erro">
                        <?php print($nasc_erro); ?>
                    </span>
                </label> <br>
                <input type="date" name="nasc" id="nascid" value=
                "<?php print($nasc); ?>">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
    </form>
</body>
</html>