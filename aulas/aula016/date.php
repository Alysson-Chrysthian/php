<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <div>
        <?php
            #Seta o Fuso-Horario q sera usado na função date()
            date_default_timezone_set("America/Sao_Paulo");
            /* DATE() FUNCTION
                d = dia
                m = mês 
                y = ano
                t = dia da semana            
            */
            print("Hoje é dia ".date("d/m/y")."<br>");
            #você pode colocar "/", "-", ":" e etc para separar as unidades de tempo
            print("Agora são ".date("H:i:sa")."<br>");
            /* TAMBEM É POSSIVEL MOSTRAR AS HORAS
                H = hora(00-23)
                h = hora(01-12)
                m = minutos(0-59)
                s = segundos(0-59)
                a = am/pm
            */
            $data = mktime(14, 57, 46, 9, 10, 2008);
            print("A data escolhida foi ".date("d/m/y - H:i:sa", $data)."<br>");
            /*
                Com mktime() você fornece hora, minuto, segundo, mês, dia e ano, nesta ordem para salvar uma data, e você pode exibila colocando uma variavel que recebe esta data como segundo parametro da função date()
            */
            $data = strtotime("22:45:24 September 10 2008");
            print("A data feita foi ".date("H:i:sa - d/m/y", $data)."<br>");
            /*A função strtotime() é uma função bem esperta, e pode passar varios valores para data*/
            $data = strtotime("tomorrow");
            print("Amanha vai ser dia ".date("d/m/y", $data)."<br>");
        ?>
    </div>
</body>
</html>