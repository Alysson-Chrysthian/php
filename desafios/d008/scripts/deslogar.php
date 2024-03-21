<?php
    session_start();
    $_SESSION["NivelAcesso"] = null;
    header("location: ../index.php");
    exit();
?>