<?php

/*Ejercicio 1: Semáforo
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch*/

$color = ["Rojo", "Amarillo", "Verde"];

//A

function semaforo_a($color){
    if($color=="Rojo"){
        return "Frene";
    } elseif ($color=="Amarillo"){
        return "Precaución";
    } elseif ($color=="Verde"){
        return "Avance";
    } else{
        return "Estado desconocido";
    }
}

//B

function semaforo_b($color) {
    return $color == "Rojo" ? "Frene" :
           ($color == "Amarillo" ? "Precaución" :
           ($color == "Verde" ? "Avance" : "Estado desconocido"));
}

//C

function semaforo_c($color){
    switch($color){
        case "Rojo":
            return "Frene";
        case "Amarillo":
            return "Precaución";
        case "Verde":
            return "Avance";
        default:
            return "Estado desconocido";
    }
}

?>