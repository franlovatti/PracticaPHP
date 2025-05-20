<?php
//a)
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
echo "<br>";
// Este codigo muestra la fecha y hora actual en la que se ha accedido a la pagina.
//b)
function sumar($sumando1,$sumando2){
  $suma=$sumando1+$sumando2;
  echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
echo "<br>";
// Este codigo define una funcion que suma dos numeros y muestra la suma con el resultado.
?>