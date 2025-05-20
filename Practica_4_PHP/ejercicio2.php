<?php
// Ejercicio 2
//a)
$i = 1;
while ($i <= 10) {
 print $i++;
}
echo '<br>';
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
echo '<br>';
$i = 0;
do {
 print ++$i;
} while ($i<10);
echo '<br>';
// Son equivalentes en salida, pero los primeros dos dejan la var i=11 y la ultima deja la var i=10

// b)
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
echo '<br>';
for ($i = 1; $i <= 10; print $i, $i++) ;
echo '<br>';
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
echo '<br>';
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
echo '<br>';
// son equivalentes

// c)

if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}

switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
// son equivalentes
?>