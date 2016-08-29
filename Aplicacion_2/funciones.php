<?php
/*	Aplicación Nº 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/


function inicio() {

	echo "<p>";
	echo date("Y.m.d");
	echo "<p/>";
	
	echo "<p>";
	echo date("l, d/m/Y");
	echo "<p/>";
	
	echo "<p>";
	echo date(DATE_RSS);
	echo "<p/>";

	$dia = date("z");
	//$dia = date("z",strtotime("2015-02-21"));
	
	echo "<p>";
	echo "Estamos en ";
	
	if (date("L") == 1) {
		$dia--;
	}

	switch (true) {
		case ($dia < 79):
			echo "verano";
		break;
		case ($dia < 171):
			echo "otoño";
			break;
		case ($dia < 263):
			echo "invierno";
			break;
		case ($dia < 354):
			echo "primavera";
			break;
	}
	
	echo "<p/>";

}



?>