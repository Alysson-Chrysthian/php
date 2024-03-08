<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handing</title>
</head>
<body>
    <?php
        $NomeArq = "MeuArquivo.txt";
        #utilizamos a função fopen("file.txt") para abrir/criar um arquivo
        $MeuArq = fopen($NomeArq, "r");
        /*Os parametros que fopen("filename.txt", "open_mode") aceita sao o nome do arquivo e o modo que você vai utilizar para abrilo, temos os seguintes valores que podem ser colocados no segundo parametro

        "r" - abre o arquivo no modo de leitura o "file pointer" começa no inicio do arquivo, se o arquivo nao existe, nada acontece 
        "w" - abre o arquivo no modo de escrita apaga todo o conteudo do arquivo, se o arquivo nao existir é criado um novo, "file pointer" começa no inicio do arquivo
        "a" - abre o arquivo em modo de escrita, mas mantem todo o conteudo do arquivo selecionado, cria um novo arquivo se o informado nao existir, o "file pointer" fica no final do arquivo
        "x" - cria um novo arquivo em modo de escrita, se o arquivo existir retorna um erro, e o valor false
        "r+" - abre um arquivo em modo de leitura/escrita, se o arquivo não existir retorna um erro, o "file pointer" começa no inicio do arquivo
        "w+" - abre um arquivo em modo de leitura/escrita, apaga todo o conteudo existente no arquivo, se o arquivo nao existir, ele cria um novo, o "file pointer" começa no inicio do arquivo
        "a+" - abre um arquivo em modo de leitura/escrita, mantem o conteudo do arquivo, se nao existir arquivo ele cria um novo, e o "file pointer" se inicia no final do arquivo
        "x+" - abre um arquivo em modo de leitura/escrita, se o arquivo nao existir ele retorna false e um erro
        */
        
        #Podemos utilizar a função fread("filename.txt", até_onde_ler) para ler um arquivo e deixa o "file pointer" aonde ele parou de ler
        print fread($MeuArq, (filesize($NomeArq)/2));
        print fread($MeuArq, (filesize($NomeArq)/2));
        #filesize() retorna o numero de caracteres no documento oferecido como parametro
        fclose($MeuArq);
        #fileclose() fecha o arquivo, é uma boa pratica de programação sempre fechar os arquivos que nao vai utilizar mais
        $MeuArq = fopen($NomeArq, "r");
        print "<br>sempre que você for fechar seu arquivo, e for voltar a trabalhar nele depois, se lembre de abrilo novamente<br>";

        #a função fgets($MyFile) ler uma unica linha do arquivo, e passa o "file pointer" pra linha seguinte
        $linha = fgets($MeuArq);
        print $linha."<br><br>";
        #você pode utilizar juntamente do fgets, o feof em loops para ler um arquivo por completo
        while (!feof($MeuArq)) {
            print fgets($MeuArq)."<br>";
        }
        fclose($MeuArq);
        print "<br>";
        #fgetc() lê um unico caractere de um arquivo
        $MeuArq = fopen($NomeArq, "r");
        print fgetc($MeuArq);
        #tambem podemos utilizar loops aqui
        while (!feof($MeuArq)) {
            $letra = fgetc($MeuArq);
            print $letra;
        }
        print "<br>";
        fclose($MeuArq);
        
        $MeuArq = fopen($NomeArq, "a");
        $conteudo = file_get_contents($NomeArq);
        print $conteudo;
        #A função fwrite() pode ser utilizada para escrever em um arquivo, o primeiro parametro é o arquivo, o segundo é o conteudo
        $txt = "\nUX - User Experience\nGUI - Graphic User Interface";
        $TxtVetor = explode("\n", $txt);
        $escrever = true;
        foreach ($TxtVetor as $valor) {
            if (strpos($conteudo, $valor)) {
                $escrever = false;
                break;
            }
        }
        if ($escrever) {
            fwrite($MeuArq, $txt);
        }
        /*
        Quanto ao file pointer utilizamos as seguintes funções

        fseek - Move o ponteiro de arquivo para uma posição específica dentro do arquivo.
        Ele aceita como parametros, o arquivo, o deslocamento em bytes, e apartir de um onde o deslocamento vai começar, esse ultimo aceitando os seguintes valores
        SEEK_SET (início do arquivo), SEEK_CUR (posição atual) ou SEEK_END (fim do arquivo).
        
        rewind($arquivo) - reseta o ponteiro, voltando ele pro inicio

        ftell($arquivo) - retorna a posição atual do ponteiro
        */
    ?>
</body>
</html>