<?php
/*Ejercicio 3: Concatenar textos
Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
ambos textos concatenados como uno solo.*/

$texto1 = "Hola ";

$texto2 = "Programación Básica II";

function concatenar($uno,$dos){

$frase = $uno.$dos;

return $frase;

}

concatenar($texto1, $texto2);

?>