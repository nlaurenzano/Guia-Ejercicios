<html>
<head>
	<title>Aplicación Nro. 1</title>
</head>
<body>

	<?php
	// 	Aplicación Nº 1 (Sumar números) 
	// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no 
	// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números 
	// se sumaron.

	$suma = 0;
	$contador = 0;
	$i = 1;
	$nrosSumados = "";


	while ($suma < 1000) {
		$suma += $i;
		if ($nrosSumados == 0) {
			$nrosSumados = $i;
		} else {
			$nrosSumados .= ", " . $i;
		}
		$i++;
	}

	echo "Se sumaron " . ($i-1) . " números.";
	echo "<br /><br />";
	echo "Números que se sumaron: " . $nrosSumados;
	
	?>

</body>
</html>