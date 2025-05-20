<?php
// Ejercicio 1
// doble es una función que recibe un número y lo multiplica por 2
function doble($i) { // El tipo de la variable $i es int
  return $i*2; // el * es el operador de multiplicación
}
$a = TRUE; // El tipo de la variable $a es bool
$b = "xyz"; // El tipo de la variable $b es string
$c = 'xyz'; // El tipo de la variable $c es string
$d = 12; // El tipo de la variable $d es int
echo gettype($a); // imprime boolean
echo gettype($b); // imprime string
echo gettype($c); // imprime string
echo gettype($d); // imprime integer
if (is_int($d)) { // if es una estrucuta de control, is_int devuelve true si $d es un entero
 $d += 4; // el operador += suma 4 a $d
}
if (is_string($a)) { //if es una estrucuta de control, is_string devuelve true si $a es un string
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3; // el operador ? es un operador ternario, si $a es true entonces $d se incrementa en 1, si no se multiplica por 3
$f = doble($d++); // $d++ incrementa $d en 1, doble($d) llama a la función doble y le pasa $d sin incrementar, asigna el resultado a $f
$g = $f += 10; // $f += 10 incrementa $f en 10 y asigna el resultado a $g
echo $a, $b, $c, $d, $f , $g; // imprime los valores de $a, $b, $c, $d, $f y $g
?>