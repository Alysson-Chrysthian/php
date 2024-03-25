<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="../estilos/LoginStyle.css">
    <!--
    Chamando script de validação de formulario
    Chamando script de captura de informações do formulario
    -->
    <?php require_once "../scripts/PegandoInfoForm.php" ?>
    <?php require_once "../scripts/ValidandoForm.php" ?>
    <style>
        /*Configurando mensagem de erro*/
        div#ExibirErros {
            background-color: #ff00002f;
            color: #ff3020;
            font-weight: bold;
            <?php
                print $erro != "" ? "padding: 5px;":""; 
            ?>
        }
    </style>
</head>
<body>
    <main>
        <section id="TelaDeLogin">
            <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                <!--Campo para a exibição de erros-->
                <div id="ExibirErros">
                    <?php print $erro ?>
                </div>
                <!--Campo para digitar o nome-->
                <div id="CampoDeNome">
                    <label for="NomeId">Nome:</label>
                    <input type="text" name="nome" id="NomeId" autocomplete="off" value="<?php print $_SESSION["nome"] ?>">
                </div>
                <!--Campo para digitar a data de nascimento-->
                <div id="CampoDeData">
                    <label for="DataId">Data:</label>
                    <input type="text" name="data" id="DataId" autocomplete="off" value="<?php print $_SESSION["nasc"] ?>" placeholder="dd/mm/yyyy">
                </div>
                <!--Campo para upar a foto de perfil-->
                <div id="CampoDeFoto">
                    <label for="FotoId">Foto de perfil</label>
                    <input type="file" name="foto" id="FotoId" accept="image/jpeg">
                </div>
                <!--Campo de submit-->
                <div id="CampoDeEnvio">
                    <input type="submit" name="EnviarForm" value="Concluir Cadastro">
                </div>
            </form>
        </section>
    </main>
</body>
</html>