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
		$path = "misArchivos/palabras.txt";
		$archivo = fopen($path, "r");
		if ($archivo == false) {
			echo "Error al leer el archivo.";
			return false;
		}

		$texto = fread($archivo,filesize($path));
		if ($texto == false) {
			echo "Error al leer el archivo.";
			return false;
		}

		$palabras = array();
		$palabras = explode(" ", $texto);		// Solo separo por espacio
		
		return $palabras;
	}

	public static function ContarPalabras($palabras) {
		$contadorArray = array();	// Array asociativo con la cantidad de letras de la palabra como clave

		foreach ($palabras as $palabra) {
		// Recorre todas las palabras del array (todas las del archivo)
			$longitud = strlen($palabra);

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

	public static function MostrarRecuento($contador) {

		echo "<h2>En el archivo leído hay:</h2>";
var_dump($contador);
		foreach ($contador as $key => $resultado) {
			echo "<p>$resultado palabras de $key letras.</p>";
		}
	}
}

?>