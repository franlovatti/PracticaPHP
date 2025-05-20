<?php
//Ejercicio 2 array
//a)
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo "<br>";
echo $matriz[12];
echo "<br>";
//La salida de este codigo es: bar true (en realidad es 1, pero se interpreta como true).
//El primer elemento de la matriz es una cadena y el segundo es un booleano.
//b)
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo "<br>";
echo $matriz["unamatriz"][13];
echo "<br>";
echo $matriz["unamatriz"]["a"];
echo "<br>";
//La salida de este codigo es: 5 9 42
//El primer elemento de la matriz es un array asociativo con tres elementos.
//c)
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
//Este codigo no tiene salida porque la matriz se elimina al final.
?>