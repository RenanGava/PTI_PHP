<?php

function Pegarfloat($str)
{

    if (strstr($str, ",")) {

        $str = str_replace(".", "", $str);

        $str = str_replace(",", ".", $str);

        return $str;
    }

    return $str;
}



function calculoImc($peso, $altura)
{
    $arrayImc = [
        "18.5" => "Magreza",
        "24.9" => "Saudável",
        "29.9" => "Sobrepeso",
        "34.9" => "Obesidade Grau I",
        "39.9" => "Obesidade Grau II",
        "" => "Obesidade Grau III"
    
    ];

    $calc = $peso / ($altura ** 2);

    foreach( $arrayImc as $indice => $saude){
        
        if($calc < $indice){
            echo '<p>Atenção, seu IMC é <span>' . number_format($calc, 2) . '</span>, e você está classificado como <span>'.$saude.'</span></p>';
            break;
        }
        else if($calc > $arrayImc['39.9']){
            echo '<p>Atenção, seu IMC é <span>' . number_format($calc, 2) . '</span>, e você está classificado como <span>'.$saude.'</span></p>';
        }

    }
}

if (isset($_GET['acao'])) {
    $peso = floatval(Pegarfloat(@$_GET['peso']));
    $altura = floatval(Pegarfloat(@$_GET['altura']));

    if ($peso != 0 && $altura != 0) {
        echo calculoImc($peso, $altura);
    } else {
        echo '<p>Atenção os valores de Altura e Peso são inválidos</p>';
    }
}
