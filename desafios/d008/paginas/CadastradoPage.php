<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        p {
            font-size: 1.4em;
        }

        form {
            width: 350px;
        }
    </style>
</head>
<?php
    session_start();
    $acesso;
    $pagina;
    if ($_SESSION["NivelAcesso"]) {
        $acesso = $_SESSION["adm"]["acesso"];
        $pagina = "admPage.php";
    }
    else if (!$_SESSION["NivelAcesso"]) {
        $acesso = $_SESSION["user"]["acesso"];
        $pagina = "userPage.php";
    }
?>
<body>
    <main>
            <p>
                Ola, bem vindo, o seu nivel de acesso é 
                <strong><?php print $acesso ?></strong>
            </p>
            <p>
                <strong>Escolha uma das opções abaixo</strong>
            </p>
            <div>
                <a href="<?php print $pagina ?>">Ir para pagina de <?php print $acesso ?></a>
                /
                <a href="../scripts/deslogar.php">Sair</a>
            </div>
    </main>
</body>
</html>