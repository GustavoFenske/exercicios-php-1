<?php

function ordenarNomes($nomes){
   $array_nomes = explode(",", trim($nomes));
    $array_nomes = array_map('trim', $array_nomes);
   
   sort($array_nomes);
    $nomes_alfabetico = implode(", ", $array_nomes);
   
   return [
    "nomes_alfabetico" => $nomes_alfabetico,
    "nomes" => $nomes
   ];
}

$nomes = "gustavo, icaro, djneniffer , roeder, sim";

$resultado = ordenarNomes($nomes);

echo "A lista original é: " . $resultado['nomes'] . "<br>";
echo "A lista ordenada é: " . $resultado['nomes_alfabetico'] . "<br>";

?>
