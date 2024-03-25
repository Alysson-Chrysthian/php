<?php
    require_once "funções/FunçõesDeValidação.php";
    //Iniciando a sessão

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $foto = $_FILES["foto"];
        $caminho = "../uploads/FotoDePerfil.jpg";
        //Salvando a foto de perfil
        move_uploaded_file($foto["tmp_name"], $caminho);
    }
?>