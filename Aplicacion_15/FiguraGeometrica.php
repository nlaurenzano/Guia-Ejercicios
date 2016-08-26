<?php


/**
* 
*/
class FiguraGeometrica {

	protected $_color;
	protected $_perimetro;
	protected $_superficie;


	//function __construct(argument)
	function FiguraGeometrica() {
		
	}

	public function getColor() {
		return $this->_color;
	}
	public function setColor($color) {
		$this->_color = $color;
	}

	public function ToString() {
		return "Color: ".$this->_color;
	}

	/* Dibujar, retornará un string (con el color que corresponda) 
	formando la figura geométrica del objeto que lo invoque 
	(retornar una serie de asteriscos que modele el objeto).*/
	public function Dibujar() {}

	/* CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su funcionalidad será la de inicializar los atributos _superficie y _perimetro.*/
	protected function CalcularDatos() {}

}

class Rectangulo extends FiguraGeometrica {

	private $_ladoDos;
	private $_ladoUno;

	public function __construct($ladoUno, $ladoDos) {
		$this->$_ladoUno = $ladoUno;
		$this->$_ladoDos = $ladoDos;
		
		$this->CalcularDatos();
	}

	protected function CalcularDatos() {
		$_superficie = $_ladoUno * $_ladoDos;
		$_perimetro = 2 * ($_ladoUno + $_ladoDos);
	}

	public function Dibujar() {
	// Obtener toda la información completa del objeto, y luego dibujarlo por pantalla.
		echo ToString();

		for ($i=0; $i<$ladoUno; $i++) {
			echo "*";
			for ($j=0; $j<$ladoDos; $j++) {
				echo "*";
			}
		}
	}

	public function ToString() {
		return parent::ToString() . " - Superficie: ".$_superficie . " - Perímetro: ".$_perimetro;
	}


}

?>