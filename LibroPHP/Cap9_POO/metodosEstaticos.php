<?php

	/**
	 * los metodos estaticos
	 * pueden ser utilizados sin
	 * necesidad de crear instancias
	 * de estos.
	 */

	class Nombre {
		protected $nombre;
		
		public function getNombre() {
			return $this->nombre;
		}
		
		public function setNombre ($nombre) {
			$this->nombre = $nombre;
		}
		
		// metodo estatico
		
		public static function nombreDefecto () {
			return "Luis Miguel Cabezas Granado <br />";
		} 
		
	}	// fin del class
	
	$luis = new Nombre;
	
	echo $luis -> nombreDefecto();
	
	// tambien se puede acceder al nombre por defecto
	echo Nombre :: nombreDefecto();
?>