<?php
    namespace user;
    require_once "Registro.php";
    class UserNivel1 {
        use \Registro;
        private static string $nivelAcesso = "Usuario Nivel 1";
    }

    class UserNivel2 {
        use \Registro;
        private static string $nivelAcesso = "Usuario Nivel 2";
    }

    class UserNivel3 {
        use \Registro;
        private static string $nivelAcesso = "Usuario Nivel 3";
    }
?>