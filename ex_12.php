<?php
function analisarProdutos($produtos, $produtoPesquisado){
    $maiscaro = $produtos[0];
    $maisbarato = $produtos[0];
    $somaprecos = 0;
    $produtoencontrado = null;

    foreach ($produtos as $produto){

        if ($produto["preco"] > $maiscaro["preco"]){
            $maiscaro = $produto;
        }

        if ($produto["preco"] < $maisbarato["preco"]){
            $maisbarato = $produto;
        }

        $somaprecos += $produto["preco"];
        if (strtolower($produto["nome"]) == strtolower($produtoPesquisado)){
            $produtoencontrado = $produto;
        }

    }

    $mediaprecos = $somaprecos / count($produtos);

    return [
        "mais_caro" => $maiscaro,
        "mais_barato" => $maisbarato,
        "media_precos" => $mediaprecos,
        "pesquisado" => $produtoencontrado
    ];

}

$produtos_usuario = [
    ["nome" => "Arroz", "preco" => 25.90],
    ["nome" => "Feijão", "preco" => 8.50],
    ["nome" => "Óleo", "preco" => 12.00],
    ["nome" => "Carne", "preco" => 45.00]
];

$resultado = analisarProdutos($produtos_usuario, "Carne");

echo "Produto mais caro: " . $resultado["mais_caro"]["nome"]. $resultado["mais_caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["mais_barato"]["nome"] . $resultado["mais_barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media_precos"], 2, ",", ".") . "<br>";

if ($resultado["pesquisado"]){
    echo "Produto pesquisado encontrado: " . $resultado["pesquisado"]["nome"] . " - R$ " . $resultado["pesquisado"]["preco"] . "<br>";
} else {
    echo "Produto pesquisado não encontrado.<br>";
}

?>