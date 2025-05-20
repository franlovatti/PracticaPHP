<?php
$a = array( 'color' => 'rojo',
'sabor' => 'dulce',
'forma' => 'redonda',
'nombre' => 'manzana',
4
);
foreach ($a as $key => $value) {
    echo "$key => $value<br>";
}
echo '<br>';
$b['color'] = 'rojo';
$b['sabor'] = 'dulce';
$b['forma'] = 'redonda';
$b['nombre'] = 'manzana';
$b[] = 4;
foreach ($b as $key => $value) {
    echo "$key => $value<br>";
}

// Son equivalentes
?>
