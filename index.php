<html>
<head>

    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset200802.css" class="css">

    <style>

        p, h2{

          text-align: center; 
          color: black; 

        }

        body{

            background-image: url("https://pbs.twimg.com/media/GMSqDXbWMAAUYsW.jpg");
            background-repeat: no-repeat; /* Impede a repetição da imagem */
            background-size: cover; /* Ajusta a imagem para cobrir toda a área */
            background-position: center;
            padding-bottom: 100%;
            padding-top: 1%;

        }

        div {

            background-color: rgba(45, 45, 45, 0.76);
            margin-left: 1%;
            margin-right: 1%;
            padding: 1%;
        }

    </style>
<title>Instagram</title>
<link rel="shortcut icon" type="imagex/png" href="https://cdn-icons.flaticon.com/svg/6422/6422200.svg?token=exp=1737059758~hmac=7f364594776ef77a9325b67ebda041ce">

</head>

<body>
    <div>
<?php

$capitulo = "Esse é o capitulo 6 no livro q tô lendo";
$data = "Aqui deveria ter a data de hoje, mas tô comprequiça de pôr :D";
$descricao = "Em resumo, eu estou aprendendo PHP";
$variavel = "<p text-align: center;>Meu segundo código php!</p>";
$Not_Octal = 0377;
$Not_Hexa = 0xff;   //Comentario construtivo
$dados[0] = "";
$texto = "";
$arquivos = array ("nsei.inc","outrofcn.fcn","teste.fcn");

for ($j=0;$j<sizeof($arquivos);$j++) {

    include $arquivos[$j];

}

echo "<h2 text-align: center;>Meu primeiro código php!</h2>";
echo $variavel;
echo "<p>Valor base 8: $Not_Octal (0377)<br>Valor base 16: $Not_Hexa (0xff)</p>";

/*
for ($i = 0; $i<=9; $i++) //for com valor decimal
{
    $dados[$i] = $i;
    $i > 1 ?  $texto = "unidades!" : ($i == 0 ? $texto = "nenhuma unidade!" : $texto = "unidade!");
    echo "$dados[$i] = $texto <br>";
}
*/

//include "teste.fcn"; //Inclui uma função externa! :D

/*for ($i = 0x00; $i<=0x10; $i++) //for mas com valor de base hexadecimal 
{
    $dados[$i] = $i;
    $i > 1 ?  $texto = "unidades!" : ($i == 0 ? $texto = "nenhuma unidade!" : $texto = "unidade!");
    echo "<p>$dados[$i] = $texto <br></p>";
}
*/

//include "outrofcn.fcn";

?>
    </div>
</body>
</html>