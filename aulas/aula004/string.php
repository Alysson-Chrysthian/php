<?php
    echo "Digite seu primeiro nome: ";
    $Primeiro_nome = trim(fgets(STDIN));
    echo "Digite seu ultimo nome: ";    
    $Ultimo_nome = trim(fgets(STDIN));
    $Nome_completo = "$Primeiro_nome $Ultimo_nome";
    $Nome_completo = str_replace(" ", "", $Nome_completo);
    
    /*
    utilizar o fgets(STDIN) para pegar inputs
    utilizar função trim() para apagar automaticamente os espaçoes em brnaco antes e depois da string
    utilizar str_replace() para substituir toda a ocorrencia de um caractere ou conjunto dos mesmo por outro caractere ou um conjunto dos mesmo
    para retornar o comprimento de uma string, se usa a função strlen();
    */

    echo "O seu nome completo tem ".strlen($Nome_completo)." letras\n";
    echo "O seu primeiro nome tem ".strlen(trim($Primeiro_nome))." letras\n";
    echo "O seu ultimo nome tem ".strlen(trim($Ultimo_nome))." letras\n";
?>