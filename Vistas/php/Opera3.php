<?php
    if (isset($_REQUEST['Calcular'])) {
      $array[]=$_REQUEST['dt1'];
      $array[]=$_REQUEST['dt2'];
      $array[]=$_REQUEST['dt3'];
      $array[]=$_REQUEST['dt4'];
      $array[]=$_REQUEST['dt5'];
      $array[]=$_REQUEST['dt6'];
      $resultado = 0;
      foreach ($array as $valor) {
        $resultado+=$valor;
        if ($valor >= 36) {
          $resultado36+=$valor;
        }
        if ($valor >= 50) {
          $resultado50+=$valor;
        }
      }



    	header("Location:../include/vectoresymatrices.php?atotal=$resultado&resultado36=$resultado36&resultado50=$resultado50");
    }

    if (isset($_REQUEST['Calcular1'])) {
      $array1[]=$_REQUEST['dat1'];
      $array1[]=$_REQUEST['dat2'];
      $array1[]=$_REQUEST['dat3'];
      $array1[]=$_REQUEST['dat4'];
      $array1[]=$_REQUEST['dat5'];
      $array1[]=$_REQUEST['dat6'];
      $array1[]=$_REQUEST['dat7'];
      $array1[]=$_REQUEST['dat8'];
      $array1[]=$_REQUEST['dat9'];
      $resultado1 = 0;
        foreach ($array1 as $valor1) {
          $resultado1+=$valor1;
        }
      	header("Location:../include/vectoresymatrices.php?dtotal=$resultado1");
    }





 ?>
