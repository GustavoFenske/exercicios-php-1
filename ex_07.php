<?php

function calcularDesconto($valor_compra)
{

    if ($valor_compra > 100 && $valor_compra < 500) {
        $desconto = 0.1;
        $valor_final = $valor_compra - ($valor_compra * 0.1);

    } elseif ($valor_compra > 500 && $valor_compra < 1000) {
        $desconto = 0.2;
        $valor_final = $valor_compra - ($valor_compra * 0.2);

    } elseif ($valor_compra > 1000) {
        $desconto = 0.3;
        $valor_final = $valor_compra - ($valor_compra * 0.3);

    }
    return [
        'desconto' => $desconto,
        'valor_final' => $valor_final
    ];
}

$valor_compra = 600;
$resultado = calcularDesconto($valor_compra);
$desconto = $resultado['desconto'];
$valor_final = $resultado['valor_final'];
echo "O valor da compra é: R$ " . $valor_compra . "<br>";
echo "O desconto é: R$ " . $desconto . "<br>";
echo "O valor final é: R$ " . $valor_final . "<br>";


?>