<?php

function Pegarfloat($str)
{

    if (strstr($str, ",")) {

        $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs

        $str = str_replace(",", ".", $str); // replace ',' with '.'

        return $str;

    }

    return $str;

    
}

function calculoImc($peso, $altura)
{
    
    $calc = $peso / ($altura ** 2);

    if ($calc <= 18.5) {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Magreza</span></p>';
    } else if ($calc > 18.5 && $calc < 24.9) {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Saudável</span></p>';
    } else if ($calc >= 25.0  && $calc < 29.9) {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Sobrepeso</span></p>';
    } else if ($calc >= 30  && $calc < 34.9) {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Obesidade Grau I</span></p>';
    } else if ($calc >= 35  && $calc < 39.9) {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Obesidade Grau II</span></p>';
    } else {
        return '<p>Atenção, seu IMC é <span>'.number_format($calc,2).'</span>, e você está classificado como <span>Obesidade Grau III</span></p>';
    }
}

if (isset($_GET['acao'])) {
    $peso = floatval(Pegarfloat(@$_GET['peso']));
    $altura = floatval(Pegarfloat(@$_GET['altura']));

    if ($peso != 0 && $altura != 0) {
        echo calculoImc($peso, $altura);
    }
}
