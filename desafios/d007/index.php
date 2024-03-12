<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
    <?php
        /*Uma tela de cadastro que passa as informações para um outro arquivo php, passando por um json, o cadastro tera, cpf,  numero de telefone, nome, idade, senha, email e estado em que mora*/
        //FUNÇÃO PARA VERIFICAR SENHA
        include "validate.php"
    ?>
<body>
    <form action="<?php print($_SERVER["PHP_SELF"]); ?>" method="post">
        <!--Nome-->
        <div>
            <label for="nomeid">Nome</label>
            <br>
            <input type="text" name="nome" id="nomeid" value="<?php print("$nome"); ?>">
        </div>
        <!--Data de Nascimento-->
        <div>
            <label for="nascid">Data de Nascimento</label>
            <br>
            <input type="text" name="nasc" id="nascid" placeholder="xx/xx/xxxx" value="<?php print("$Nasc"); ?>">
        </div>
        <!--Email-->
        <div>
            <label for="emailid">E-mail</label>
            <br>
            <input type="text" name="email" id="emailid" value="<?php print("$email"); ?>">
        </div>
        <!--Senha-->
        <div>
            <label for="senhaid">Senha</label>
            <br>
            <input type="text" name="senha" id="senhaid" value="<?php print("$senha"); ?>">
        </div>
        <!--Telefone-->
        <div>
            <label for="telid">Telefone</label>
            <br>
            <input type="text" name="tel" id="telid" value="<?php print("$telefone"); ?>">
        </div>
        <!--Estado-->
        <div>
            <label for="stdid">Estado</label>
            <br>
            <select name="std" id="stdid">
                <?php
                    const Estados = [
                        "Ac" => "Acre",
                        "Al" => "Alagoas",
                        "Ap" => "Amapa",
                        "Am" => "Amazonas",
                        "Ba" => "Bahia",
                        "Ce" => "Ceara",
                        "Es" => "Espirito Santo",
                        "Go" => "Goiais",
                        "Ma" => "Maranhão",
                        "Mt" => "Mato Grosso",
                        "Ms" => "Mato Grosso do sul",
                        "Mg" => "Minas Gerais",
                        "Pa" => "Para",
                        "Pb" => "Paraiba",
                        "Pr" => "Parana",
                        "Pe" => "Pernambuco",
                        "Pi" => "Piaui",
                        "Rj" => "Rio de Janeiro",
                        "Rn" => "Rio Grande Do Norte", 
                        "Rs" => "Rio Grande Do Sul",
                        "Ro" => "Rondonia",
                        "Rr" => "Roraima",
                        "Sc" => "Santa Catarina",
                        "Sp" => "São Paulo",
                        "Se" => "Sergipe",
                        "To" => "Tocantins",
                        "Df" => "Distrito Federal"
                    ];
                    foreach (Estados as $k => $v) {
                        $k = strtoupper($k);
                        print("<option value=\"$k\">$v($k)</option>");
                    }
                ?>
            </select>
        </div>
        <!--CPF-->
        <div>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" name="cpf" id="cpfid" value="<?php print("$cpf"); ?>">
        </div>
        <!--ENVIAR-->
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>