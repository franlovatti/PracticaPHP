<!-- Página que va a contener al contador de visitas -->
<html>
<head></head>
<body>
<?php include("contador.php")?>
</body>

<!--
  Este código incluye el archivo contador.php, que contiene la lógica para contar las visitas a la página.
  El archivo contador.php abe el archivo contador.dat, lee el numero de visitas, lo incrementa en 1 y lo guarda nuevamente en el archivo reemplazando el anterior.
  Luego, muestra el total de visitas en la página.
  Una vez modificado el archivo contador.dat, si se cierra la pagina, cuando se vuelva a cargar el sitio el contador seguira incrementando desde donde se quedo.  
  -->
</html>