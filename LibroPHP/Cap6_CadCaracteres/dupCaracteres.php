<html>

<head>
	<title> Caracteres Duplicados </title>
</head>

<body>
	<?php
 		function duplicarCaracteres($cadena) {
 			// strlen obtiene el tamaño de la cadena			
 			$tamano = strlen($cadena);
 			$cadenaAuxiliar = " ";

 			
			for($i = 0; $i < $tamano; $i++){
				$cadenaAuxiliar .= ( $cadena[$i] . $cadena[$i] );
			}	// fin de for
			
 			return $cadenaAuxiliar;

		}	// fin de la definicion de funcion duplicarCaracteres

		$cadena = "Duplicar las letras";
		
// 		// se hace el llamado a a cadena
 		echo duplicarCaracteres($cadena);
		
	?>
</body>

</html>