<?php
/*Ejercicio 2: Binomio cuadrado perfecto
Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)(al cuadrado).
a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
potencia
b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a(al cuadrado)+ 2*a*b + b(al cuadrado)*/

$valorA = 2;

$valorB = 3;

function binomioCuadradoPerfecto($a, $b){
return "El resultado del binomio cuadrado perfecto es: ".(($a+$b)*($a+$b));
}

binomioCuadradoPerfecto($valorA,$valorB);

//A

function binomioCuadradoPerfecto_a($a, $b){
    return "El resultado del binomio cuadrado A perfecto es: ". pow($a+$b, 2);
}

binomioCuadradoPerfecto_a($valorA,$valorB);

//B

function binomioCuadradoPerfecto_b($a, $b){
    return "El resultado del binomio cuadrado B perfecto es: " . ( (pow($a, 2) + 2 * $a * $b + pow($b, 2)) );
}

binomioCuadradoPerfecto_b($valorA,$valorB);

?>