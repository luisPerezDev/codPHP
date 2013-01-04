<?php
class Nombre {
	protected $nombre;

	function __construct($nombre) {
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this -> nombre;
	}

	function setNombre($nombre){
		$this -> nombre = $nombre;
	}

	function nombreDefecto(){
		return "luis Miguel <br>";
	}
}	// fin de la clase nombre

class Apellido extends  Nombre {
	protected $apellidos;

	function __construct($nombre, $apellidos) {
		
		if(func_num_args() == 2) {
			$apellidos = func_get_arg(1);
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			
			parent::__construct($nombre);
		} else {
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			parent::__construct($nombre);
		}
	} // fin de constructor


	public function getApellidos(){
		return $this->apellidos;
	}
}	// fin de clase apellido


$luis = new Apellido("Luis Miguel", "Cabezas Granado");

echo $luis->getNombre() . "<br>";
echo $luis->getApellidos();

?>