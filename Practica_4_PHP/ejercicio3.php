<html>
<head><title>Documento 1</title></head>
<body>
  <?php
  //a)
  echo "<table width = 90% border = '1' >";
  $row = 5;
  $col = 2;
  for ($r = 1; $r <= $row; $r++) {
  echo "<tr>";
  for ($c = 1; $c <= $col;$c++) {
  echo "<td>&nbsp;</td>\n";
  } echo "</tr>\n";
  }
  echo "</table>\n";
  
  //Este codigo genera una tabla de 5 filas y 2 columnas, con un borde de 1 pixel.
  //El bucle for externo controla las filas y el bucle for interno controla las columnas.
  
  echo "<br>";
  ?>

  <?php
  //b)
  if (!isset($_POST['submit'])) {
  ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
    </form>
  <?php
  }
  else {
    $age = $_POST['age'];
    if ($age >= 21) {
    echo 'Mayor de edad';
    }
    else {
    echo 'Menor de edad';
    }
  }
  //Este codigo genera un formulario que pide la edad del usuario y muestra si es mayor o menor de edad.
  //El formulario se envía a la misma página y se procesa con el método POST.
  //Si el usuario no ha enviado el formulario, se muestra el formulario, si lo envio, se muestra el resultado.
  ?>
</body></html>