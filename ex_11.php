<?php

function formatarTexto($texto){

    $maiusculo = strtoupper($texto);
    $minusculo = strtolower($texto);

    $primeiraletra = ucwords(strtolower($texto));

    $quantidadeletras = strlen($texto);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "capitalizado" => $primeiraletra,
        "quantidade_letras" => $quantidadeletras
    ];

}

$texto_usuario = "icaro me da nota";

$resultado = formatarTexto($texto_usuario);

echo "Texto original: $texto_usuario <br>";
echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Capitalizado: " . $resultado["capitalizado"] . "<br>";
echo "Quantidade de letras: " . $resultado["quantidade_letras"] . "<br>";

?>