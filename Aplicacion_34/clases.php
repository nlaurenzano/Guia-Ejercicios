<?php

/**
* 
*/
class Archivo
{
	
	function __construct()
	{
		# code...
	}

	public static function Leer() {
		$archivo = fopen("../misArchivos/palabras.txt", "r");
		if ($archivo == false) {
			return false;
		}

		$palabras = array();
		$texto = fread($archivo,filesize($archivo));
		$palabras[] = split($texto, " ");		// Solo separo por espacio

		return $palabras;
	}

	public static ContarPalabras($palabras) {
		$contadorArray = array();	// Array asociativo con la cantidad de letras de la palabra como clave

		foreach ($palabras as $palabra) {
		// Recorre todas las palabras del array (todas las del archivo)
			$longitud = str_len($palabra);

			// Se busca el contador para palabras de longitud $contador
			//		Si no existe, se agrega con valor 1
			//		Si ya existe, se aumenta en 1
			if (isset($contadorArray[$longitud])) {
				$contadorArray[$longitud]++;
			} else {
				$contadorArray[$longitud] = 1;
			}
		}
		return $contadorArray;
	}

	public static MostrarRecuento($contador) {

		echo "<h2>En el archivo leído hay:</h2>"

		foreach ($contador as $resultado) {
			echo "<p>$resultado[1] palabras de $resultado[0] letras.</p>"
		}
	}
}

>?