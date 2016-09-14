<html>
<head>
	<title>Aplicación Nro. 34</title>
</head>
<body>

	<?php
	/* 	Aplicación Nº 34 (Contar letras) 
	Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) y ofrezca estadísticas sobre
	cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. No tener en cuenta los espacios en blanco
	ni saltos de líneas como palabras.
	Los resultados mostrarlos en una tabla.*/
	include_once("clases.php");
	//Archivo::MostrarRecuento(Archivo::ContarPalabras(Archivo::Leer()));

	$palabras = Archivo::Leer();
	if ($palabras != false) {
		$palabrasContadas = Archivo::ContarPalabras($palabras);
		Archivo::MostrarRecuento($palabrasContadas);
	}


	?>

</body>
</html>