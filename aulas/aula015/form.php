<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
    <style>
        span.rqd {
            color: red;
        }
    </style>
</head>
<?php
    function input_format($arg) {
        $arg = trim($arg);
        $arg = stripslashes($arg);
        $arg = htmlspecialchars($arg);
        return $arg;
    }

    $nome_erro = $email_erro = $url_erro = $genero_erro = "";
    $nome = $email = $url = $comment = $genero = "";

    if ($_POST) {
        /*Atribuição de valores*/
        $url = $_POST["website"];
        $comment = $_POST["msg"];

        if (empty($_POST["nome"])) {
            $nome_erro = "Name is required";
        } else {
            $nome = input_format($_POST["nome"]);
        }

        if (empty($_POST["email"])) {
            $email_erro = "Email is required";
        } else {
            $email = input_format($_POST["email"]);
        }

        if (empty($_POST["genero"])) {
            $genero_erro = "Gender is required";
        } else {
            $genero = $_POST["genero"];
        }
        /*Validation*/
        /*Validação do nome*/
        $padrao_nome = "/^[A-z-' ]*$/i";
        if (!preg_match($padrao_nome, $nome)) {
            $nome_erro = "Invalid name format";
        }
        /*Validação do email*/
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_erro = "Invalid email format";
        }
        /*Validação URL*/
        if (!filter_var($url)) {
            $url_erro = "*Invalid url format";
        }
    }
?>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <h2>PHP Form Validation Example</h2>
        <p style="color: red;">* required field</p>
        <div>
            <label for="nomeid">Nome:</label>
            <input type="text" name="nome" id="nomeid" value="<?php print($nome); ?>"> <span class="rqd">*<?php print($nome_erro); ?></span>
        </div>
        <br>
        <div>
            <label for="emailid">E-mail:</label>
            <input type="text" name="email" id="emailid" value="<?php print($email); ?>"> <span class="rqd">*<?php print($email_erro); ?></span>
        </div>  
        <br>
        <div>
            <label for="websiteid">Website:</label>
            <input type="text" name="website" id="websiteid" value="<?php 
            print($url); ?>"><span class="rqd"><?php print($url_erro); ?></span>
        </div>
        <br>
        <div>
            <label for="msgid">Comentario:</label>
            <textarea name="msg" id="msgid" cols="40" rows="5"><?php print($comment); ?></textarea>
        </div>
        <div>
            <label for="genero">Genero:</label>
            <input type="radio" name="genero" id="masc" value="Masculino" 
            <?php
                if ($genero == "Masculino") {
                    echo "checked";
                } 
            ?>>
            <label for="masc">Homem</label>
            <input type="radio" name="genero" id="femi" value="Feminino"
            <?php
                if ($genero == "Feminino") {
                    echo "checked";
                } 
            ?>>
            <label for="femi">Mulher</label>
            <input type="radio" name="genero" id="outr" value="Outro"
            <?php
                if ($genero == "Outro") {
                    echo "checked";
                } 
            ?>>
            <label for="outr">Outro</label>
            <span class="rqd">*<?php print($genero_erro); ?></span>
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <div>
        <h2>Seu input</h2>
        <?php
            print($nome."<br>");
            print($email."<br>");
            print($url."<br>");
            print($comment."<br>");
            print($genero."<br>");
        ?>
    </div>
</body>
</html>