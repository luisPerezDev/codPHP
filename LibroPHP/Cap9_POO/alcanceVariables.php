
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Alcances de objetos</title>
</head>

<body>

	<?php
	class Nombre{
		public $nombre;

		function setNombre($nombre){
			$this -> nombre = $nombre;
		}

		function getNombre(){
			return  $this->nombre;
		}

	} // fin de la clase Nombre

	function cambiarNombre($objeto, $nombre){
		$objeto -> setNombre($nombre);
	}

	$luis = new Nombre;
	$luis -> setNombre("luis miguel");

	echo "el nombre del objeto es " . $luis -> getNombre() . "<br />";
	cambiarNombre($luis, "Pedro");

	echo "el nombre del objeto es " . $luis -> getNombre() . "<br />";
	?>
</body>

</html>