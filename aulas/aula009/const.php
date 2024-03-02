<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
        #Crie uma constante utilizando a função define(Name, value)
        define("Constante_teste", "Minha Constante");
        print(Constante_teste."<br>");
        #Tambem é possivel utilizar a keyword const para isso
        const Outra_Constante = "Minha outra constante";
        print(Outra_Constante."<br>");
        #Você tambem pode criar Arrays constantes utilizando define()
        define("Celulares", [
            "J5-Prime",
            "Redmi Note 11",
            "M10",
            "S9 Plus"
        ]);
        print_r(Celulares);
        #Constantes, diferentemente de variaveis sao globais a partir do momento de sua criação

            /*Exemplificando Variaveis Globais*/
            function Mostrar_Variavel_Global() {
                global $Variavel_Global; 
                $Variavel_Global = "Minha Variavel Global";
                print("<br>".$Variavel_Global."(Dentro da função)"."<br>");
            }
            Mostrar_Variavel_Global();
            print(" $Variavel_Global(Fora da função)<br>");

            /*Exemplificando Constantes*/
            function Mostrar_Constante() {
                define("Minha_Constante_Global", "Meu Conteudo Da Minha Constante Global");
                print(Minha_Constante_Global."(Dentro da função)"."<br>");
            }
            Mostrar_Constante();
            print(Minha_Constante_Global."(Fora da função)"."<br>");
    ?>  
</body>
</html>