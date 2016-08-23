<html>
<head>
	<title>Aplicación Nro. 8</title>
</head>
<body>

	<?php
	/* 	Aplicación Nº 8 (Carga aleatoria)
	Imprima los valores del vector asociativo siguiente usando la estructura de control foreach: 
	$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';*/

	/*$v[1] = 90;
	$v[30] = 7;
	$v['e'] = 99;
	$v['hola'] = 'mundo';
	*/
	$v = array(1=>90, 30=>7, 'e'=>99, 'hola'=>'mundo');

	echo 'var_dump($v): ';
	echo "<br />";
	echo "<br />";
	var_dump($v);

	echo "<br />";
	echo "<br />";
	echo "foreach:";
	
	foreach ($v as $key => $value) {
		echo "<br />";
		echo '$v[' . $key . '] = ' . $value;
	}



	
	?>

</body>
</html>