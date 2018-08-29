<?php
if (isset($_REQUEST['Procesar'])) {
  $array[]=$_REQUEST['dt1'];
  $array[]=$_REQUEST['dt2'];
  $array[]=$_REQUEST['dt3'];
    sort($array);
      foreach ($array as $orden) {
        $orden1=$orden1.$orden." - ";
      }


  	header("Location:../include/funciones.php?orden=$orden1");
}

if (isset($_REQUEST['Procesar1'])) {
  $array1[]=$_REQUEST['dat1'];
  $array1[]=$_REQUEST['dat2'];
  $array1[]=$_REQUEST['dat3'];
  $suma = array_sum($array1);
  $total = count($array1);
  $media = $suma/$total;

    	header("Location:../include/funciones.php?media=$media");
}

 ?>
