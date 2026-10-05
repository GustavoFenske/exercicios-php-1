<?php

function estatisticasnumericas($numeros){

    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maior_valor = max($numeros);
    $menor_valor = min($numeros);

    $numeros_ordenados = $numeros;
    sort($numeros_ordenados);

    $posicao_central = floor($quantidade / 2);

    if ($quantidade % 2 == 0){
        $mediana = ($numeros_ordenados[$posicao_central - 1] + $numeros_ordenados[$posicao_central]) / 2;
    } else {
        $mediana = $numeros_ordenados[$posicao_central];
    }

    $quantidade_pares = 0;
    $quantidade_impares = 0;

    foreach ($numeros as $numero){
        if ($numero % 2 == 0){
            $quantidade_pares++;
        } else {
            $quantidade_impares++;
        }
    }

    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maior_valor,
        "menor" => $menor_valor,
        "mediana" => $mediana,
        "pares" => $quantidade_pares,
        "impares" => $quantidade_impares
    ];

}

$numerosusuario = [14, 2, 9, 6, 11, 4];

$resultado = estatisticasnumericas($numerosusuario);

echo "Valores informados: " . implode(", ", $numerosusuario) . "<br>";
echo "Soma total: " . $resultado["soma"] . "<br>";
echo "Média aritmética: " . $resultado["media"] . "<br>";
echo "Valor máximo: " . $resultado["maior"] . "<br>";
echo "Valor mínimo: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Total de pares: " . $resultado["pares"] . "<br>";
echo "Total de ímpares: " . $resultado["impares"] . "<br>";

?>