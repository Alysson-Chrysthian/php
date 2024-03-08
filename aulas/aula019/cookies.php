<?php
    #como criar um cookie e pegar o nome do usuario
    $cookie_name = "user";
    $user_name = get_current_user();
    setcookie($cookie_name, $user_name, time() + 3600,"/");
    if (isset($_COOKIE[$cookie_name])) {    
        $user = $_COOKIE[$cookie_name];
        print($user."<br>");
    } else {
        print("O cookie não foi definido"."<br>");
    }
    #para fechar/excluir um cookie, set o mesmo cookie novamente porem com o parametro expire num tempo passado
    setcookie($cookie_name, $user_name, (time() - 3600), "/");
    #é importante notar que qualquer modificação feita em um cookie é valida pro codigo inteiro, entao se eu fechar meu cookie na ultima linha, e tiver um na primeira mandando exibir esse cookie, vou obter um erro, pq mesmo fechando depois, ainda sim o fechamento teve influencia sobre todo meu codigo php
    
    #para chegar se os cookies estão permitidos crie um cookie de teste e use uma estrutura condicional para verificar se ele foi aceito
    setcookie("cookie_test", "test_value", time() + 3600, "/");
    if (count($_COOKIE) > 0) {
        print("cookies estão habilitados");
    } else {
        print("cookies estão desabilitados");
    }
?>