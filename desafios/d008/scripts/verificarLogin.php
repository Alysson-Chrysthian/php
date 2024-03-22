<?php
    session_start();
    if (!isset($_SESSION["nome"]) || !isset($_SESSION["senha"])) {
        require "deslogar.php";
    }
?>