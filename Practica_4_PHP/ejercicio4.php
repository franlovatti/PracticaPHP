<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";

//El primer echo provocara una Warning porque las variables $color y $flor no estan definidas, ya que el include no se ha ejecutado.
//El segundo echo imprimira "El clavel blanco" porque las variables $color y $flor han sido definidas en el include.
?>