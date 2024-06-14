<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Trabajos Prácticos</title>
    <link rel="stylesheet" href="css\estilos.css">
</head>
<body>
    <header>    
        <h1><?php echo "Pereyra Camila Anabella" ?></h1>
    </header>
    <main>
<section>
<article>
<h2><?php echo "Ejercicio 1 : Semáforo" ?> </h2>
<h3><?php 

include 'Ejercicio 1\ejercicio1.php';

echo "Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
<br><br>
a) función semaforo_a($ color): Resuelva la solución utilizando if else
<br><br>
b) función semaforo_b($ color): Resuelva la solución utilizando if inline (return ?: )
<br><br>
c) función semaforo_c($ color): Resuelva la solución utilizando switch
<br><br>
El color seleccionado para la ejecución del ejercicio C es el azul: 
<br><br>
Ejecuto el ejercicio 1 con las variables color1 - Rojo - , color2 - Amarillo -, color3 - Verde -, color4 - Azul - y el resultado del mismo es: ";
 
$color1 = "Rojo";
$color2 = "Amarillo";
$color3 = "Verde";
$color4 = "Azul";

echo "<br><br>Para la funcion A, el el color1: ".semaforo_a($color1);
echo "<br><br>Para la funcion A, el el color2: ".semaforo_a($color2);
echo "<br><br>Para la funcion A, el el color3: ".semaforo_a($color3);
echo "<br><br>Para la funcion A, el el color4: ".semaforo_a($color4);

echo "<br><br>Para la funcion B, el el color1: ".semaforo_b($color1);
echo "<br><br>Para la funcion B, el el color2: ".semaforo_b($color2);
echo "<br><br>Para la funcion B, el el color3: ".semaforo_b($color3);
echo "<br><br>Para la funcion B, el el color4: ".semaforo_b($color4);

echo "<br><br>Para la funcion C, el el color1: ".semaforo_c($color1);
echo "<br><br>Para la funcion C, el el color2: ".semaforo_c($color2);
echo "<br><br>Para la funcion C, el el color3: ".semaforo_c($color3);
echo "<br><br>Para la funcion C, el el color4: ".semaforo_c($color4);
?>
</h3>
</article>
<article>
<h2><?php echo "Ejercicio 2: Binomio Cuadrado Perfecto" ?> </h2>
<h3><?php 

include 'Ejercicio 2\ejercicio2.php';

echo "Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
2
<br><br>
a) función binomioCuadradoPerfecto_a($ a, $ b): Resuelva la solución utilizando la función de
potencia
<br><br>
b) función binomioCuadradoPerfecto_b($ a, $ b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a2 + 2*a*b + b2
<br><br>
Ejecuto el ejercicio 2 con las variables valor 1 - 2 - y valor 2 - 3 -, el resultado es: <br><br>";

$valor1 = 2;

$valor2 = 3;
echo binomioCuadradoPerfecto($valor1, $valor2)."<br><br>";
echo binomioCuadradoPerfecto_a($valor1, $valor2)."<br><br>";
echo binomioCuadradoPerfecto_b($valor1, $valor2)."<br><br>";
?></h3>

</article>
<article>
<h2><?php echo "Ejercicio 3 : Concatenar Textos" ?> </h2>
<h3><?php 

include 'Ejercicio 3\ejercicio3.php';

echo"Cree una función concatenar($ texto1, $ texto2) que reciba dos textos como parámetro y devuelva
ambos textos concatenados como uno solo.<br><br>
Ejecuto el ejercicio 3 con las variables texto 1 - Hola - y texto 2 - UNLaM -, el resultado es: <br><br>";

$texto1 = "Hola ";

$texto2 = "UNLaM";

echo concatenar($texto1, $texto2);

?></h3>
</article>

<article>
<h2><?php echo "Ejercicio 4 : Incrementar" ?></h2>
<h3><?php 

include 'Ejercicio 4\ejercicio4.php';

echo "Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1
(Ver pasaje de parámetros por referencia).<br><br>
Ejecuto el ejercicio 4 con la variable valor = 55, y luego de incrementarla el resultado es: <br><br>";

$valor = 55;

echo incrementar($valor);
?></h3>
</article>

<article>
<h2><?php echo "Ejercicio 5 : Sumatoria" ?></h2>
<h3><?php 

include 'Ejercicio 5\ejercicio5.php';

echo "Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
<br><br>
a) función sumatoria_a( $ array ): Resuelva la solución utilizando la estructura de control for.
<br><br>
b) función sumatoria_b( $ array ): Resuelva la solución utilizando la estructura for each.
<br><br>
c) función sumatoria_c( $ array ): Resuelva la solución utilizando la estructura de control while.<br><br>
Ejecuto el ejercicio 5 para la sumatoria de los valores almacenados en el array Numeros para la suma, a saber: 21+27+28+60";

$numerosParaLaSuma = [21, 27, 28, 60];

echo "<br><br>Para la funcion sumar A el resultado es: ".sumatoria_a($numerosParaLaSuma);
echo "<br><br>Para la funcion sumar B el resultado es: ".sumatoria_b($numerosParaLaSuma);
echo "<br><br>Para la funcion sumar C el resultado es: ".sumatoria_c($numerosParaLaSuma)

?></h3>
</article>
</section>
</main>
<footer>
    <p><strong>Programación Web II</strong></p>
</footer>
</body>
</html>