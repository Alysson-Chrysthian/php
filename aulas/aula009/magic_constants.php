<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Constants</title>
</head>
<body>
    <?php
        /*Ha um total de 9 Magic Constants, Irei mostrar o funcionamento de 6 as outras 3 estão melhor especificadas no bloco de notas*/

        #1 - __CLASS__
        #se utilizado dentro de uma classe mostra o nome da classe a qual pertence
        class MyClass {
            public function ClassName() {
                return __CLASS__;
            }
        }
        $MyObject = new MyClass;
        echo $MyObject->ClassName();

        #2 - __DIR__
        #mostra o diretorio do arquivo
        echo "<br>".__DIR__;

        #3 - __FILE__
        /*Mostra o nome do arquivo e o caminho inteiro dele*/
        echo "<br>".__FILE__;

        #4 - __FUNCTION__
        /*Se estiver dentro de uma Função Retorna o nome da função*/
        function  MyFunction() {
            return __FUNCTION__;
        }
        echo "<br>".MyFunction();

        #5 - __LINE__
        /*Retorna o numero da linha atual*/
        echo "<br>".__LINE__;

        #6 - __METHOD__
        /*se for usado dentro de uma função que pertence a uma retorna o nome da função e da classe*/
        class MyOtherClass {
            public function MyMethod() {
                return __METHOD__;
            }
        }
        $MyOtherObject = new MyOtherClass;
        echo "<br>".$MyOtherObject->MyMethod();
    ?>
</body>
</html>