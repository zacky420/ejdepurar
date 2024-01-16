<?php

// Muestra un mensaje simple
echo "¡Hola, mundo! Este es un archivo PHP de prueba.";

// Variables
$nombre = "Juan";
$edad = 25;

// Mostrar variables
echo "<br>Nombre: " . $nombre;
echo "<br>Edad: " . $edad;

// Condición
if ($edad >= 18) {
    echo "<br>$nombre es mayor de edad.";
} else {
    echo "<br>$nombre es menor de edad.";
}

// Ciclo (bucle)
echo "<br><br>Números del 1 al 5:";
for ($i = 1; $i <= 5; $i++) {
    echo " $i";
}

