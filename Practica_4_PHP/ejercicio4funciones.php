<?php
function comprobar_nombre_usuario($nombre_usuario){
  //compruebo que el tamaño del string sea válido.
  if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
  echo $nombre_usuario . " no es válido<br>";
  return false;
  }
  //compruebo que los caracteres sean los permitidos
  $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
  for ($i=0; $i<strlen($nombre_usuario); $i++){
    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
      echo $nombre_usuario . " no es válido<br>";
      return false;
    }
  }
  echo $nombre_usuario . " es válido<br>";
  return true;
}

?>

<!-- Formulario HTML -->
<!DOCTYPE html>
<html>
<head>
  <title>Comprobar nombre de usuario</title>
</head>
<body>
  <form method="post" action="ejercicio4funciones.php">
    <h2>Comprobar nombre de usuario</h2>
    <label for="nombre">Nombre de usuario:</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Comprobar">
  </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST['nombre'] ?? '';
  comprobar_nombre_usuario($nombre);
}
?>