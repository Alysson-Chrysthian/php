<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upando foto de perfil</title>
    <link rel="stylesheet" href="../estilos/HomeStyle.css">
</head>
<?php
    session_start();
    if (!$_SESSION["logado"]) {
        header("location: ../paginas/pagina_login.php");
        exit();
    }
?>

<?php
    $fotoCam;
    if (file_exists("../uploads/FotoDePerfil.jpg")) {
        $fotoCam = "../uploads/FotoDePerfil.jpg";
    } else {
        $fotoCam = "FotoDePerfilPadrao";
    }
?>
<body>
    <main>
        <section id="Perfil">
            <figure id="FotoDePerfil">
                <img src="<?php print $fotoCam ?>" alt="FotoDePerfil">
            </figure>
            <article id="Informações">
                <p>
                    Nome: <?php print $_SESSION["nome"] ?>
                </p>
                <p>
                    Nasc: <?php print $_SESSION["nasc"] ?>
                </p>
            </article>
        </section>
    </main>
</body>
</html>