<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 2</h1>

<?php

//Este es un comentario de linea

/*
Este es
Un comentario de multiples
Lineas
*/

$NombreClase = "Lenguaje 4";

echo "<html><head><meta charset=\"utf-8\"></head>";
echo "<body>";
echo "<h2>Esta es la clase de $NombreClase mañana y tarde (Simbolo) </h2>";
echo "<h2>Esta es otra fila de la clase de ".$NombreClase." con dos cdenas concatenadas </h2>";
echo "</body>";
echo "?hmtl>";

$numero = 50;
$calculo = $numero / 2+6;
echo "el resultado de la operacion es: $calculo";

$logico = true;
$logico2= false;
echo "<p> El contenido de una variable tipo booleana verdadero: $logico y variable booleana falsa: $logico2</p>";

$variableNombreClase = "NombreClase";
echo "<p>Este es un nombre de variable extraido de una cadena ".$$variableNombreClase."</p>";

?>

</body>>
</html>
