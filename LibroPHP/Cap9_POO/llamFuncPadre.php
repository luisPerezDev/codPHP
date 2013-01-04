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
			$this->apellidos = $apellidos;
			
			Nombre ::__construct($nombre);
			// seria mejor la construccion siguiente
			// ya que podriamos no conocer el nombre de la
			// clase Padre
			Parent ::__construct($nombre);
		}
		
		
		public function getApellidos(){
			return $this->apellidos;
		}
	}	// fin de clase apellido
	
	
	
	$luis = new Apellido("Luis Miguel", "Cabezas Granado");
	
	echo $luis->getNombre() . "<br>";
	echo $luis->getApellidos();
	
?>