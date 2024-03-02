<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        #você pode ter arrays dentro de arrays 
        $MyFirstArray = array(["Alysson", 15],["Pedro", 16],["Sandoval", 14]);
        print_r($MyFirstArray);
        print("<br>".$MyFirstArray[0][0]."<br><br>");
        #é possivel exibir informações de array utilizando o fooeach, para array multidimensionais é possivel utilizar um for seguido de um foreach
        for ($i=0;$i<count($MyFirstArray);$i++) {
            foreach ($MyFirstArray[$i] as $MyFirstMultiDimensionalArray) {
                print($MyFirstMultiDimensionalArray."<br>");
            }
        }
        #Tambem é possivel mudar um valor de uma determinada posição de um array da seguinte maneira
        $MyFirstArray[0][1] = 16;
        print("<br>".$MyFirstArray[0][1]);
        #Para adicionar itens a um array utilizamos a função array_push($Array, Value)
        print("<br>");
        array_push($MyFirstArray, ["Guilherme", 16]);   
        for ($i=0;$i<count($MyFirstArray);$i++) {
            foreach ($MyFirstArray[$i] as $Array) {
                print($Array."<br>");
            }
        }
        #e nois temos os array associativos
        $MyFristAssociativeArray = array("Name" => "Alysson", "Age" => 15, "Gender" => "Masculino");
        var_dump($MyFristAssociativeArray);
        print("<br>".$MyFristAssociativeArray["Name"]."<br>");
        
        $MyFristAssociativeArray["Name"] = "Chrysthian";
        print($MyFristAssociativeArray["Name"]."<br>");

        foreach ($MyFristAssociativeArray as $Key => $Value) {
            print("$Key => $Value <br>");
        }
        #Formas de criar um array
        #você pode usar [] ao em vez de array()
        $Estados = [
            "São Paulo",
            "Ceara",
            "Brasilia",
            "Acre", #Pode ter uma virgula depois do ultimo valor do array
        ];
        #você tambem pode criar um array vazio e atribuir os valores depois
        $Frutas = [];
        $Frutas[0] = "Maçã";
        $Frutas[1] = "Pera";
        $Frutas[2] = "Laranja";
        $Frutas[3] = "Banana";
        #você pode ter um array hibrido, q é tanto um array por indexagem tanto um array por assoação
        $Carros = [
            "Ford",
            "Vermelho",
            "Year" => 1977,
        ];
        #Exibir os tres arrays criados anteriormente na tela
        print("<br>");
        foreach ($Estados as $Std) {
            print($Std."<br>");
        }
        print("<br>");
        foreach ($Frutas as $Frt) {
            print($Frt."<br>");
        }
        print("<br>");
        foreach ($Carros as $Crrs => $Value) {
            if (!is_int($Crrs)) {
                print($Crrs." => ".$Value);
                continue;
            }
            print($Value."<br>");
        }
        print("<br>");
        #Usar funções dentro de arrays
        function sum(int $x, int $y) {
            $z = $x + $y;
            return $z;
        }
        $Array_With_Func = [
            "Alysson",
            15,
            "sum"
        ];
        $soma = $Array_With_Func[2](15, 15);
        print("<br>".$soma."<br>");
        #Usar funções dentro de arrays associativos
        $Associative_Array_With_Func = [
            "Function" => "sum",
        ];
        $soma = $Associative_Array_With_Func["Function"](15, 20);
        print($soma);
    ?>    
</body>
</html>