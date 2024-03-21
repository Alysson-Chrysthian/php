<?php
    require_once "NamespaceAdm.php";
    require_once "NamespaceUsuario.php";
    use admin as a;
    use user as u;

    $Usuario1 = new u\UserNivel1("Guilherme", 15);
    $Usuario2 = new u\UserNivel2("Vinicius", 17);
    $Usuario3 = new u\UserNivel3("Luidi", 15);

    $Adm1 = new a\AdmNivel1("Vitor", 16);
    $Adm2 = new a\AdmNivel2("Sandoval", 14);
    $Adm3 = new a\AdmNivel3("Alysson", 15);

    $Usuario1->MostrarInfo();
    $Usuario2->MostrarInfo();
    $Usuario3->MostrarInfo();

    $Adm1->MostrarInfo();
    $Adm2->MostrarInfo();
    $Adm3->MostrarInfo();
?>