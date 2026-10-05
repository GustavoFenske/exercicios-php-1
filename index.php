<?php

require_once 'funcoes.php';

$peso_usuario = 75.5;
$altura_usuario = 1.75;
$imc_resultado = calcularimc($peso_usuario, $altura_usuario);
echo "IMC (" . $peso_usuario . "kg, " . $altura_usuario . "m): " . number_format($imc_resultado, 2) . "<br>";

$emailteste = "icaro@bigbrother.com";
$emailvalido = validaremail($emailteste) ? "Válido" : "Inválido";
echo "Validação do e-mail '$emailteste': $emailvalido <br>";

$senhagerada = gerarsenhaaleatoria(10);
echo "Senha aleatória gerada: $senhagerada <br>";

$fraseteste = "oi icaro, tudo bem?";
$totalvogais = contarvogais($fraseteste);
echo "Total de vogais em '$fraseteste': $totalvogais <br>";

$palavra_original = "gugupro";
$palavra_invertida = inverter_texto($palavra_original);
echo "Texto original: $palavra_original | Invertido: $palavra_invertida <br>";

$data_nascimento_usuario = "1998-05-15";
$idade_calculada = calcularidade($data_nascimento_usuario);
echo "Idade para quem nasceu em 15/05/1998: $idade_calculada anos <br>";

$valordolar = 150.00;
$valorreal = converter_moeda($valordolar, 5.20);
echo "Conversão: US$ " . number_format($valordolar, 2) . " = R$ " . number_format($valorreal, 2) . "<br>";

$telefonebruto = "11987654321";
$telefoneformatado = formatar_telefone($telefonebruto);
echo "Telefone formatado: $telefoneformatado <br>";

$hora_atual = 14;
$saudacaotexto = gerarsaudacao($hora_atual);
echo "Saudação para às $hora_atual:00: $saudacaotexto <br>";

$senhateste = "senha123";
$statussenha = validarsenhaforte($senhateste) ? "Forte" : "Fraca";
echo "Avaliação da senha '$senhateste': $statussenha <br>";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href='ex_01.php'>Exercício 01</a>
    <br>
    <a href='ex_02.php'>Exercício 02</a>
    <br>
    <a href='ex_03.php'>Exercício 03</a>
    <br>
    <a href='ex_04.php'>Exercício 04</a>
    <br>
    <a href='ex_05.php'>Exercício 05</a>
    <br>
    <a href='ex_06.php'>Exercício 06</a>
    <br>
    <a href='ex_07.php'>Exercício 07</a>
    <br>
    <a href='ex_08.php'>Exercício 08</a>
    <br>
    <a href='ex_09.php'>Exercício 09</a>
    <br>
    <a href='ex_10.php'>Exercício 10</a>
    <br>
    <a href='ex_11.php'>Exercício 11</a>
    <br>
    <a href='ex_12.php'>Exercício 12</a>
    <br>
    <a href='ex_13.php'>Exercício 13</a>
    <br>
    <a href='ex_14.php'>Exercício 14</a>
</body>
</html>