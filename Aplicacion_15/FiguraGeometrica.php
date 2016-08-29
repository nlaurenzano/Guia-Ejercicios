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
		$this->_ladoUno = $ladoUno;
		$this->_ladoDos = $ladoDos;
		
		$this->CalcularDatos();
	}

	protected function CalcularDatos() {
		$this->_superficie = $this->_ladoUno * $this->_ladoDos;
		$this->_perimetro = 2 * ($this->_ladoUno + $this->_ladoDos);
	}

	public function Dibujar() {
	// Obtener toda la información completa del objeto, y luego dibujarlo por pantalla.
		echo $this->ToString();
		echo "<br />";
		echo "<br />";

		for ($i=0; $i<$this->_ladoUno; $i++) {
			for ($j=0; $j<$this->_ladoDos; $j++) {
				echo "*";
			}
			echo "<br />";
		}
	}

	public function ToString() {
		return parent::ToString() . " - Superficie: ".$this->_superficie . " - Perímetro: ".$this->_perimetro;
	}


}

class Triangulo extends FiguraGeometrica {

	private $_altura;
	private $_base;

	public function __construct($altura, $base) {
		$this->_altura = $altura;
		$this->_base = $base;
		
		$this->CalcularDatos();
	}

	protected function CalcularDatos() {
		$this->_superficie = ($this->_altura * $this->_base) / 2;
		$lado = ($this->_base/2)**2 + ($this->_altura)**2;
		$this->_perimetro = 2*($lado) + $this->_base;
	}

	public function Dibujar() {
	// Obtener toda la información completa del objeto, y luego dibujarlo por pantalla.
		echo $this->ToString();
		echo "<br />";
		echo "<br />";

		for ($i=0; $i<$this->_altura; $i++) {
			for ($j=0; $j<$this->_base; $j++) {
				echo "*";
			}
			echo "<br />";
		}
	}

	public function ToString() {
		return parent::ToString() . " - Superficie: ".$this->_superficie . " - Perímetro: ".$this->_perimetro;
	}


}

?>