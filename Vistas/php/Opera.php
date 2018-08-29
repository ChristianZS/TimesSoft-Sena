
<?php

	if (isset($_REQUEST['Calcular'])){

		$base = $_REQUEST['base'];
		$altura = $_REQUEST['altura'];
		$resultado=($base*$altura)/2;
  	header("Location:../include/cargainformacion.php?dato=$resultado");
 }


if (isset($_REQUEST['EnviarConsulta'])) {
	$checkbox = $_REQUEST['checkbox'];
	$suma = 0;
		if (count($checkbox) > 0) {
			foreach ($checkbox as $valor) {
				$suma += $valor;
			}
		}
  	header("Location:../include/cargainformacion.php?sumaingredientes=$suma");
}


if (isset($_REQUEST['Verificar'])) {

	if ($_REQUEST['edad'] == "medad") {
		$Medad = "Usted es menor de edad.";
	}
	elseif ($_REQUEST['edad'] == "maedad") {
		$Medad = "Usted es mayor de edad.";
	}
		header("Location:../include/cargainformacion.php?Edad=$Medad");
}

if (isset($_REQUEST['EnviarConsultapais'])) {
	if ($_REQUEST['select'] == "1") {
		$pais = "Selecione pais";
	}
	elseif ($_REQUEST['pais'] == "2") {
		$pais = "Argentino";
	}
	elseif ($_REQUEST['pais'] == "3") {
		$pais = "Boliviano";
	}
	elseif ($_REQUEST['pais'] == "4") {
		$pais = "Brasileño";
	}
	elseif ($_REQUEST['pais'] == "5") {
		$pais = "Chileno";
	}
	elseif ($_REQUEST['pais'] == "6") {
		$pais = "Colombiano";
	}
	elseif ($_REQUEST['pais'] == "7") {
		$pais = "Costarricense";
	}
	elseif ($_REQUEST['pais'] == "8") {
		$pais = "Cubano";
	}
	elseif ($_REQUEST['pais'] == "9") {
		$pais = "Ecuatoriano";
	}
	elseif ($_REQUEST['pais'] == "10") {
		$pais = "Salvadoreño";
	}
	elseif ($_REQUEST['pais'] == "11") {
		$pais = "Guatemalteco";
	}
	elseif ($_REQUEST['pais'] == "12") {
		$pais = "Haitiano";
	}
	elseif ($_REQUEST['pais'] == "13") {
		$pais = "Hondureño";
	}
	elseif ($_REQUEST['pais'] == "14") {
		$pais = "Mexicano";
	}
	elseif ($_REQUEST['pais'] == "15") {
		$pais = "Nicaraguense";
	}
	elseif ($_REQUEST['pais'] == "16") {
		$pais = "Panameño";
	}
	elseif ($_REQUEST['pais'] == "17") {
		$pais = "Paraguayo";
	}
	elseif ($_REQUEST['pais'] == "18") {
		$pais = "Peruano";
	}
	elseif ($_REQUEST['pais'] == "19") {
		$pais = "Dominicano";
	}
	elseif ($_REQUEST['pais'] == "20") {
		$pais = "Uruaguayo";
	}
	elseif ($_REQUEST['pais'] == "21") {
		$pais = "Venezolano";
	}
		header("Location:../include/cargainformacion.php?Pais=$pais");
}















 ?>






<?php
	/*class matematica_basica {
		public static function sumar ($num1,$num2){
				$suma=$num1+$num2;
				return $suma;
		}
		public static function restar ($num1,$num2){
				$resta=$num1-$num2;
				return $suma;
		}
		public static function multiplicar ($num1,$num2){
				$multiplicacion=$num1*$num2;
				return $suma;
		}
		public static function dividir ($num1,$num2){
				$divicion=$num1/$num2;
				return $suma;
		}
	}*/
?>
