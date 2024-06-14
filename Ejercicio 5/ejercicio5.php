<?php
/*Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while*/

$numeros = [10, 15, 21, 33, 40];

//A

function sumatoria_a($vector){

    $suma = 0;

    for($i = 0; $i < count($vector); $i++){
        $suma += $vector[$i];
    }
    return "La sumatoria de todos los valores del vector es: ".$suma;
}

sumatoria_a($numeros);

//B

function sumatoria_b($vector){

    $suma = 0;

    foreach($vector as $valor){
        $suma += $valor;
        }
        return "La sumatoria de todos los valores del vector es: ".$suma;
    }

    sumatoria_b($numeros);

//C

function sumatoria_c($vector){
  
    $suma = 0;

    $i = 0;

    while($i<count($vector)){
        $suma += $vector[$i];
        $i++;
    }

    return $suma;
}

return "La sumatoria de todos los valores del vector es: ".sumatoria_c($numeros);

?>