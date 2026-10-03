<?php

function analisarNumero($numero)
{
    if ($numero % 2 == 0) {
        $numero_paridade = "Par";
    } else {
        $numero_paridade = "Ímpar";
    }

    $tio = true;

    if ($numero < 2) {
        $tio = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $tio = false;
                break;
            }
        }
    }

     $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++){
        if ($numero % $i == 0){
            $somaDivisores += $i;
        }
    }

    $perfeito = ($somaDivisores == $numero && $numero > 0);

    return [
        "paridade" => $numero_paridade,
        "primo" => $tio ? "Sim" : "Não",
        "perfeito" => $perfeito ? "Sim" : "Não"
    ];

}

$numero = 25;

$resultado = analisarNumero($numero);

echo "Número analisado: $numero <br>";
echo "Paridade: " . $resultado["paridade"] . "<br>";
echo "É primo? " . $resultado["primo"] . "<br>";
echo "É perfeito? " . $resultado["perfeito"] . "<br>";

?>