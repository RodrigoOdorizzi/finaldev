<!DOCTYPE html>



<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>


<?php





// Tranforma o array $dados em JSON
$dados_json = json_encode($valores);


/* Cria o arquivo valores.jsonagenda-bs/index.php
‘w’ : Cria o arquivo e escreve os dados,
se o arquivo já existir será substituído pelo novo;
‘a’ : Cria o arquivo e escreve os dados,
se o arquivo já existir 1,4,7,9,2,5,0);os dados novos serão
adicionados ao arquivo existente;
‘r’ : Abre o arquivo que já existe para leitura,
e somente leitura;
*/
$fp = fopen("valores.json", "w");
// Escreve o conteúdo JSON no arquivo
fwrite($fp, $dados_json);
// Fecha o arquivo
fclose($fp);



// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('valores.json');
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);
// Loop para percorrer o Objeto
foreach ($json as $value) {
    echo $value . "<br>";
}



?>



<body>


    <?php



    function mostra()
    {

        $a = 4;

        for ($x = 0; $x < $a; $x++) {

            $vt[] =  $x;
        }





        for ($x = 0; $x < $a; $x++) {

            echo $vt[$x];
        }
    }
    ?>


    <div class="oi">

        <?php


        mostra()
        ?>
    </div>


</body>

</html>