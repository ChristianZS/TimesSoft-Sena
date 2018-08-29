<?php
if (isset($_REQUEST['Calcular1'])) {
	$sueldo = $_REQUEST['sueldo'];
	if ($sueldo < 1000) {
		$opera = ($sueldo*10)/100 ;
	}
 elseif ($sueldo > 1000 && $sueldo < 2000) {
 		$opera = ($sueldo*5)/100;
 }
 else {
 	$opera = ($sueldo*3)/100;
 }
}
  	header("Location:../include/condicionales.php?Rd3=$opera");


	if (isset($_REQUEST['Calcular2'])) {
		$i=1;
		// $spc="";
		// $spc50="";
		$valor = $_REQUEST['Multiplicartxt'];
			while ($i <= 10) {
				$opera2 = $i*$valor;
				$spc = $spc.$opera2." - ";

				$i++;
					if ($opera2>=50) {
						$spc50=$spc50.$opera2." - ";
					}
			}


  	header("Location:../include/condicionales.php?spc=$spc&spc50=$spc50");
		}


			if (isset($_REQUEST['Calcular3'])) {
				$limiteS = $_REQUEST['lmts'];
				$LimiteI= $_REQUEST['lmti'];
					for ($i=$LimiteI; $i<=$limiteS ; $i++) {
						if ($i%2 == 0) {
							 $smtp = $smtp +$i;
						}
						if ($i%2 == 1) {
							 $smti = $smti +$i;
						}
					}

		header("Location:../include/condicionales.php?smtp=$smtp&smti=$smti");
	}







 ?>
