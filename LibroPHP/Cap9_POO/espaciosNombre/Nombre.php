<?php

	namespace Persona;
	
	class Nombre {
		
		static $nombre = "Luis Miguel";

		public static function getNombre(){
			return static:: $nombre;
		}
		
	}	// fin de clase Nombre
	
	
	class NombreHijo extends Nombre {
		static $nombre = "Luis Ramon";
	}
?>