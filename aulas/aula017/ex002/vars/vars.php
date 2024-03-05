<?php
    if ($_POST) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        print($nome." ".$idade);
    }
?>