<?php

function calcularimc($peso, $altura){
    if ($altura <= 0) return 0;
    return $peso / ($altura * $altura);
}

function validaremail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarsenhaaleatoria($tamanho = 8){
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%';
    $senha = '';
    $maximo = strlen($caracteres) - 1;
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $maximo)];
    }
    return $senha;
}

function contarvogais($texto){
    preg_match_all('/[aeiouáéíóúãõâêîôû]/ui', $texto, $ocorrencias);
    return count($ocorrencias[0]);
}

function inverter_texto($texto){
    return strrev($texto);
}   
function calcularidade($datanascimento){
    $data_atual = new DateTime();
    $nascimento = new DateTime($datanascimento);
    $intervalo = $data_atual->diff($nascimento);
    return $intervalo->y;
}

function converter_moeda($valor, $taxacambio = 5.0){
    return $valor * $taxacambio;
}

function formatar_telefone($numero){
    $apenasnumeros = preg_replace('/[^0-9]/', '', $numero);
    if (strlen($apenasnumeros) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $apenasnumeros);
    }
    return $numero;
}

function gerarsaudacao($hora){
    if ($hora >= 5 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarsenhaforte($senha){
    $temtamanho = strlen($senha) >= 8;
    $temletra = preg_match('/[a-zA-Z]/', $senha);
    $temnumero = preg_match('/[0-9]/', $senha);
    return $temtamanho && $temletra && $temnumero;
}

?>