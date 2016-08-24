<?php


/**
* 
*/
public class FiguraGeometrica {

	protected $_color;
	protected $_perimetro;
	protected $_superficie;


	//function __construct(argument)
	function FiguraGeometrica() {
		
	}

	public function getColor() {
		return $this=>_color;
	}
	public function setColor($color) {
		$this=>_color = $color;
	}

	public function ToString() {
		return "Color: ".$this=>_color;
	}

	public function Dibujar() {
	/*Dibujar, retornará un string (con el color que corresponda) 
	formando la figura geométrica del objeto que lo invoque 
	(retornar una serie de asteriscos que modele el objeto). 
	*/

	return "";
	}

	protected function CalcularDatos() {

	}



}

	public class Rectangulo extends FiguraGeometrica {

		private $_ladoDos;
		private $_ladoUno;

		public function __construct($ladoUno, $ladoDos) {
			$_ladoUno = $ladoUno;
			$_ladoDos = $ladoDos;
			CalcularDatos();
		}

		private function CalcularDatos() {
			$_superficie = $_ladoUno * $_ladoDos;
			$_perimetro = 2 * ($_ladoUno + $_ladoDos);
		}

		public function Dibujar() {
		// Obtener toda la información completa del objeto, y luego dibujarlo por pantalla.

			return "";
		}

		public function ToString() {
			
			echo parent::ToString() . " - Superficie: ".$_superficie . " - Perímetro: ".$_perimetro;

			echo Dibujar();

		}



	}

¿>