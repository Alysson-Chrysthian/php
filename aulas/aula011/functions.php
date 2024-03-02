<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>FUNÇÕES</h1>
    <?php
        #você pode colocar valores padroes nos parametros das funções
        print("<h2>VALORES PADROES DE FUNÇÕES</h2>");
        function MyFirstFunction($Name="Visitante", $Age=0) {
            print("Seu nome é $Name e você tem $Age anos");
        }
        MyFirstFunction();
        print("<br>");
        MyFirstFunction("Alysson");
        print("<br>");
        MyFirstFunction(15);
        print("<br>");
        MyFirstFunction("Alysson", 15);
        print("<br>");
        #Retornando valores dentro de funções
        print("<h2>RETORNANDO VALORES DE FUNÇÕES</h2>");
        function MySecondFunction($Parameter_Second_Func) {
            for ($i=0;$i<$Parameter_Second_Func;$i++) {
                global $count;
                $count = $i;
                return $Parameter_Second_Func;
            }
        }
        $Parameter_Second_Func = MySecondFunction(22);
        print("O valor de \$i dentro da função foi $count e o de \$x foi $Parameter_Second_Func"."<br>");
        #Ao retornar algum valor você tbm para a execução da função mesmo que tenha mais codigo para se seguir

        #Alterando o valor de uma variavel fora da função, dentro de uma função
        print("<h2>ARGUMETOS DE REFERENCIA</h2>");
        function MyThirdFunction(&$Variable, $Number, $sum) {
            for ($i=1;$i<=$Number;$i++) {
                $Variable += $sum;
            }
        }
        $Variable = 15;
        MyThirdFunction($Variable, 10, 5);
        print_r("A variavel após a chamada da função ficou com o valor de ".$Variable);
        print("<br>");
        #Temos como fazer com que uma função aceite um numero indeterminado de argumentos utilizando o operador "..."
        print("<h2>FUNÇÕES VARIAVEIS</h2>");
        function MyForthFunction(...$Args) {
            $Number_of_Args = count($Args);
            print("Você inseriu um total de $Number_of_Args argumentos <br>");
            for ($i=0;$i<$Number_of_Args;$i++) {
                print(($i+1)." - ".$Args[$i]."<br>");
            }
        }
        MyForthFunction(12, 154, "alysson", true, NULL, 15.1243);
        #Se a função tiver mais de um argumento, so é possivel passar o operador ... no ultimo argumento
        print("<h2>FUNÇÕES VARIAVEIS COM MAIS DE UM ARGUMENTO</h2>");
        function MyFifthFunction($last_name, $second_name,...$first_name) {
            $pessoas = count($first_name);
            for ($i=0;$i<$pessoas;$i++) {
                print(($i+1)." - ".$first_name[$i]." ".$second_name." ".$last_name."<br>");
            }
        }
        MyFifthFunction("Chaves", "Pereira", "Alysson", "Ana", "Gilmar");

        #Tipagem de argumentos de funções com php
        print("<h2>ARGUMENTOS COM TIPAGEM</h2>");
        function MySixthFunction(int ...$Number) {
            global $sum;
            for ($i=0;$i<count($Number);$i++) {
                $sum += $Number[$i];
                print("O numero atual é ".$Number[$i]." e a soma até agora é ".$sum."<br>");
            }
            return $sum;
        }
        MySixthFunction(5, 7, 14, 9);
        print($sum);
        #se eu tentar colocar um argumento que nao seja do tipo int ele retornara um erro
        #você pode especificar um tipo de retorno diferente do tipo dos argumentos
        function MySeventhFunction(float $number_1, float $number_2) : int {
            $sum = $number_1 + $number_2;
            return (int) $sum;
        }
        $sum = MySeventhFunction(3.4, 2.1);
        print("<br>Os argumentos desta função erão numeros do tipo float mais o retorno é do tipo int, q no caso foi $sum");

        #Funções recursivas são funções que chamam ela mesma dentro dela
        print("<h2>FUNÇÕES RECURSIVAS</h2>");
        function MyEightFunction($num) {
            if ($num > 0) {
                print($num)."<br>";
                $num = MyEightFunction($num-1);
            } else {
                return 0;
            }
        }
        MyEightFunction(15);
    ?>
</body>
</html>