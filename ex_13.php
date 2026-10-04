<?php

function criptografarmensagem($texto, $deslocamento){
    return cifra_de_cesar($texto, $deslocamento);
}

function descriptografarmensagem($texto_criptografado, $deslocamento){
    return cifra_de_cesar($texto_criptografado, -$deslocamento);
}

function cifra_de_cesar($texto, $deslocamento){
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++){
        $caractere = $texto[$i];

        if (ctype_upper($caractere)){
            $posicao = (ord($caractere) - ord('A') + $deslocamento) % 26;
            $posicao = ($posicao + 26) % 26;
            $resultado .= chr($posicao + ord('A'));
        } elseif (ctype_lower($caractere)){
            $posicao = (ord($caractere) - ord('a') + $deslocamento) % 26;
            $posicao = ($posicao + 26) % 26;
            $resultado .= chr($posicao + ord('a'));
        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

$mensagem_usuario = "icaro por favor tenha dó de mim";
$deslocamento_usuario = 3;

echo "Texto inicial: $mensagem_usuario <br>";

$mensagem_criptografada = criptografarmensagem($mensagem_usuario, $deslocamento_usuario);
echo "Texto codificado: $mensagem_criptografada <br>";

$mensagem_original = descriptografarmensagem($mensagem_criptografada, $deslocamento_usuario);
echo "Texto decodificado: $mensagem_original <br>";

?>