<?php
    namespace admin;
    require_once "Registro.php";
    class AdmNivel1 {
        use \Registro;
        private static string $nivelAcesso = "Adm nivel 1";
    }

    class AdmNivel2 {
        use \Registro;
        private static string $nivelAcesso = "Adm nivel 2";
    }

    class AdmNivel3 {
        use \Registro;
        private static string $nivelAcesso = "Adm nivel 3";
    }
?>