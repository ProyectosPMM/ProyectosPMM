<?php
// Variable tipo número
$numero = 10;
echo 'Esto es un número:'. $numero;
echo '<br><br>';

// Variable tipo cadena de texto
$texto = "Esto es una cadena de texto";
echo 'Mi cadena:'.$texto;
echo '<br><br>';

// Variable tipo booleano
$Booleana = True;
echo 'Variable booleana:'.$Booleana;
echo '<br><br>';

// Variable tipo arreglo
$Arreglo = array ('Patricia', 'José Antonio', 'María Fernanda');
echo $Arreglo[2];
echo '<br><br>';

// Variable tipo arreglo con propiedades
$Colores = array ("Color1"=>"Rojo", "Color2"=>"Azul" , "Color3"=>"Blanco");
echo $Colores ["Color2"];
echo '<br><br>';

// Variable tipo arreglo con objetos
$Objeto = (object) ["Mueble1"=>"Librero", "Mueble2"=>"Silla" , "Mueble3"=>"Mesa"];
echo $Objeto -> Mueble1;
echo '<br><br>';
?>