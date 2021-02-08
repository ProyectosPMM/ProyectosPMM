<?php
// Función sin parámetro

Function Bienvenido () {
    echo "Bienvenidos al curso PHP";
}
Bienvenido ();
echo '<br><br>';

// Función con parámetro

Function Saludo ($Hola) {
    echo $Hola;
}
Saludo ("Hola a todos");
echo '<br><br>';

// Función con parámetro de regreso
Function Retorno ($retornar) {

       return $retornar;
}
echo Retorno ("Retornando el valor de la función");

?>
