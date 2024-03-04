<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulario</title>
    <style>
        form {
            display: grid;
            justify-content: center;
        }

        input {
            padding: 5px 5px;
            margin: 3px 0px;
        }

        fieldset:nth-child(2) {
            margin: 10px 0px;
            height: 150px;
            width: 200px;
            text-align: center;
        }

        .erro {
            color: red;
        }
    </style>
</head>
<?php
    function validação_de_input($arg) {
        $arg = trim(htmlspecialchars($arg));
        return $arg;
    }

    $nome = "";
    $mail = "";
    $nome_erro_msg = "";
    $email_erro_msg = "";

    if ($_POST) {
        $nome = validação_de_input($_POST["nome"]);
        $mail = validação_de_input($_POST["email"]);

        if (strlen($nome) < 2) {
            $nome_erro_msg = "Nome Invalido";            
        } else {
            $nome_erro_msg = "";
        }

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $email_erro_msg = "Email Invalido";
        } else {
            $email_erro_msg = "";
        }
    }
?>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>CADASTRO</legend>
            <div>
                <label for="nomeid">
                    Nome
                    <span class="erro">
                        * <?php print($nome_erro_msg); ?>
                    </span>
                </label>
                <br>
                <input type="text" name="nome" id="nomeid" placeholder="Ex:João pedro" value="<?php print($nome); ?>">
            </div>
            <div>
                <label for="emailid">
                    Email
                    <span class="erro">
                        * <?php print($email_erro_msg); ?>
                    </span>
                </label>
                <br>
                <input type="email" name="email" id="emailid" placeholder="Ex:JoãoPedro@mail.com" value="<?php print($mail); ?>">
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
        <fieldset>
            <legend>SEUS INPUTS</legend>
            <?php
                if ($_POST) {
                    if ($nome_erro_msg == "" && $email_erro_msg == "") {
                        print("CADASTRO CONCLUIDO COM SUCESSO <br>");
                        print("$nome <br> $mail");
                    }
                }
            ?>
        </fieldset>
    </form>
</body>
</html>