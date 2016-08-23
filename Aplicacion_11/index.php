<html>
<head>
	<title>Aplicación Nro. 11</title>
</head>
<body>

	<?php
	/* 	Aplicación Nº 10 (Arrays de Arrays) 
	Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que 
	contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los 
	Arrays de Arrays.*/

	$lapicera1 = array('color'=>'azul', 'marca'=>'bic', 'trazo'=>'normal', 'precio'=>5);
	$lapicera2 = array('color'=>'rojo', 'marca'=>'bic', 'trazo'=>'grueso', 'precio'=>7);
	$lapicera3 = array('color'=>'verde', 'marca'=>'sylvapen', 'trazo'=>'fino', 'precio'=>10);

	echo "<br />";
	echo "<h2>Lista de lapiceras por índice:</h2>";

	$listaLapicerasIndex = array($lapicera1, $lapicera2, $lapicera3);
	
	foreach ($listaLapicerasIndex as $indice => $lapicera) {
		echo '$lapicera' . '[' . $indice . ']';
		foreach ($lapicera as $key => $value) {
			echo "<br />";
			echo '$lapicera[' . $key . '] = ' . $value;
		}
		echo "<br />";
		echo "<br />";
	}



	echo "<br />";
	echo "<br />";
	echo "<h2>Lista de lapiceras asociativa:</h2>";

	$listaLapicerasAsoc = array('lapicera_1'=>$lapicera1, 'lapicera_2'=>$lapicera2, 'lapicera_3'=>$lapicera3);
	
	foreach ($listaLapicerasAsoc as $indice => $lapicera) {
		echo '$lapicera' . '[' . $indice . ']';
		foreach ($lapicera as $key => $value) {
			echo "<br />";
			echo '$lapicera[' . $key . '] = ' . $value;
		}
		echo "<br />";
		echo "<br />";
	}
	
	?>

</body>
</html>