<html>
<head>
	<title>Aplicación Nro. 9</title>
</head>
<body>

	<?php
	/* 	Aplicación Nº 9 (Arrays asociativos) 
	Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que 
	contenga como elementos: „color’, „marca’, „trazo’ y „precio’. Crear, cargar y mostrar tres 
	lapiceras.*/

	$lapicera1 = array('color'=>'azul', 'marca'=>'bic', 'trazo'=>'normal', 'precio'=>5);
	$lapicera2 = array('color'=>'rojo', 'marca'=>'bic', 'trazo'=>'grueso', 'precio'=>7);
	$lapicera3 = array('color'=>'verde', 'marca'=>'sylvapen', 'trazo'=>'fino', 'precio'=>10);

/*
	echo "<br />";
	var_dump($lapicera1);
	echo "<br />";
	var_dump($lapicera2);
	echo "<br />";
	var_dump($lapicera3);
*/

	foreach ($lapicera1 as $key => $value) {
		echo "<br />";
		echo '$lapicera1[' . $key . '] = ' . $value;
	}
	
	echo "<br />";
	foreach ($lapicera2 as $key => $value) {
		echo "<br />";
		echo '$lapicera2[' . $key . '] = ' . $value;
	}

	echo "<br />";
	foreach ($lapicera3 as $key => $value) {
		echo "<br />";
		echo '$lapicera3[' . $key . '] = ' . $value;
	}
	
	?>

</body>
</html>