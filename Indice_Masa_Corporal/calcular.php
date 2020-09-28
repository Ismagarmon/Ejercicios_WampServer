<?php

$var_peso = $_REQUEST['peso'];
$var_altura = $_REQUEST['altura'];

$var_altura_correcta = $var_altura * 2;

$imc = $var_peso / $var_altura_correcta;

echo "El imc que tu tiene es: ",(printf("%.1f", $imc));

if ($imc <= 16){
    echo "Tienes una desnutrición severa";
}
elseif ($imc >= 16.1 && $imc <= 18.4){
    echo "Tienes una desnutrición moderada";
}
elseif ($imc >= 18.5 && $imc <=22){
    echo "Tienes un peso bajo";
}
elseif ($imc >= 22.1 && $imc <=24.9){
    echo "Tienes un peso normal";
}
elseif ($imc >= 25 && $imc <= 29.9){
    echo "Tienes sobrepeso";
}
elseif ($imc >= 30 && $imc <= 34.9){
    echo "Tienes obesidad tipo I";
}
elseif ($imc >= 35 && $imc <= 39.9){
    echo "Tienes obesidad tipo II";
}
elseif ($imc >= 40){
    echo "Tienes obesidad tipo III";
}
else{
    echo "Introduce bien los datos.";
}

$var = '/Imagenes/imc_dob-1.jpg';
echo '<img src="/Imagenes/imc_dob-1.jpg" border="0" />';

?>