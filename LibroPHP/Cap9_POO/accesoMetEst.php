<?php

	// en php5 existia un problema con el acceso de los 
	// metodos estaticos
	
	class Nombre {
		static $nombre = "Luis Miguel";
		
		public static function getNombre() {
			// con el uso de selft no se puede acceder a nombrehijo;
			// para que esto suceda se tiene que hacer uso de static
			
			// return self::$nombre;
			return static::$nombre;
		}
	}
	
	
	class NombreHijo extends nombre {
		static $nombre = "Luis Ramon";	
	}
	
	echo NombreHijo::getNombre();
	
	
	
?>