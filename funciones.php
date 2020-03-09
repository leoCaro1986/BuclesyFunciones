<?php

//Funcion para calcular edad de las personas

function calcularEdad($nacimiento){
    $edad=(2020-$nacimiento);
    echo("La edad de la persona es: ".$edad);
}

function calcularEdad1($nacimiento, $actual){
$edad = $actual-$nacimiento;
echo("La edad de la persona es: ".$edad);

}

function calcularEdad3($nacimiento,$actual){
    $edad = $actual-$nacimiento;
    return($edad);  
}





?>