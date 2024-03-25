<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de imagen</title>
</head>
<body>
    <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <label for="foto">Selecione sua foto de perfil</label>
        <input type="file" name="foto" id="fotoid">
        <br>
        <input type="submit" value="Enviar foto">
    </form>
    <?php
        $caminho = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $foto_perfil = $_FILES["foto"]["name"];
            $pasta = "uploads/";
            $caminho = $pasta."foto_de_perfil.jpg";
            move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta."foto_de_perfil.jpg");
        }
    ?>

    <div>
        foto de perfil: <br>
        <img src="<?php print $caminho ?>" alt="foto_de_perfil" width="200px">
    </div>
</body>
</html>