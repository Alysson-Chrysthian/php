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
        print($soma."<br>");
        #quando temos um foreach que usa um variavel de referencia e não uma copia do array original, a variavel de referencia ainda fica ligado ao array original mesmo após o termino do foreach como demonstrado no codigo abaixo
        print("<br>");
        $MeuVetor = [
            "Frutas", 
            "Carros", 
            "Pessoas"
        ];
        foreach ($MeuVetor as &$x) {
          if ($x == "Carros") {
              $x = "Motos";
          }
          print($x);
        }
        print("<br>");
        var_dump($MeuVetor);
        $x = "Humanos";
        print("<br>");
        var_dump($MeuVetor);
        #Para desasociar um array da sua variavel de referencia utilizamos a função unset()
        print("<br>");
        $MeuVetor = [
            "Frutas",
            "Carros",
            "Pessoas",
        ];
        foreach ($MeuVetor as &$y) {
            if ($y == "Frutas") {
                $y = "Vegetal";
            }
            print($y);
        }
        print("<br>");
        var_dump($MeuVetor);
        print("<br>");
        unset($y);
        $y = "Humanos";
        var_dump($MeuVetor);
        #A função unset() serve basicamente para apagar uma variavel da memoria
        #Adicionando valores a um array associativo
        $Professores = [
            "Informatica" => "Elias",
            "Programação" => "Paulo",
            "Portugues" => "Thaynara",
            "Matematica" => "Maria"
        ];
        print("<br><br>");
        var_dump($Professores);
        print("<br>");
        $Professores += ["Ingles" => "Marcelo", "Geografia" => "Thiago"];
        var_dump($Professores);
        print("<br><br>");
        #Removendo valores de um array
        $Professores_index = [
            "Elias",
            "Paulo",
            "Thaynara",
            "Maria"
        ];
        array_splice($Professores_index, 0, 2);
        print("<br>");
        print_r($Professores_index);
        print("<br>");
        #Removendo valores de array associativos
        $Professores_Associative = [
            "Informatica" => "Elias",
            "Programação" => "Paulo",
            "Portugues" => "Thaynara",
            "Matematica" => "Maria"
        ];
        #você pode utilizar o unset() ou o array_diff()
        $Professores_Associative_diffed = array_diff($Professores_Associative, ["Elias", "Maria"]);
        var_dump($Professores_Associative_diffed);
        #Agora uma demonstração com o unset
        print("<br>");
        unset($Professores_Associative["Informatica"], $Professores_Associative["Portugues"]);
        print_r($Professores_Associative);
        #Temos o array_pop() que remove o ultimo valor do array e o array_shift() que remove o primeiro valor do array
    
        /*
        sort() - sort arrays in ascending order - se usado com associative arrays transforma eles em index arrays

        rsort() - sort arrays in descending order

        asort() - sort associative arrays in ascending order, according to the value

        ksort() - sort associative arrays in ascending order, according to the key
        
        arsort() - sort associative arrays in descending order, according to the value
        
        krsort() - sort associative arrays in descending order, according to the key
        */
        print("<br><br>");
        $Numeros = [
            14,
            215,
            24,
            67,
            12,
            41,
            16
        ];
        sort($Numeros);
        print_r($Numeros);
        print("<br>");
        asort($Professores_Associative);
        print_r($Professores_Associative);
        sort($Professores_Associative);
        print("<br>");
        print_r($Professores_Associative);
    ?>   
</body>
</html>