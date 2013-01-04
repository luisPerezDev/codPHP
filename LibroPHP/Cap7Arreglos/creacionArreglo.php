<html>
<head> 
	<title> Creacion de arreglos</title>
</head>

<body>
	<?php
		// asignacion directa
		$miArray[0] = 23;
		
		$miArray[1] = 23;
		$miArray[2] = 54;
		
		
		echo "El tamaño del arreglo es : " . count($miArray) . "<br /> <br />";
		
		foreach ($miArray as $val){
			 echo "El valor del elemento ***************  es  $val <br />";
			 	
		}
		
		// en caso de de no especificar algun valor de indice estos seran
		// asignados de forma automatica
		
		$miArray2 = array (23, 45, 76, 23, 65);
		
		// se muestra el arreglo
		
		
		echo "<br /> >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> <br />";
		
		foreach ($miArray2 as $val){
			// echo "El valor del elemento  $val es : " . $miArray2[$i] + "<br />";
		}
		
		
		// la funcion array permite tambien añadir indices a los valores que se
		// intrducen utiliza el operador =>
		
		$miArray3 = array(0 => 23, 1 => 45, 2 => 76);
		
		
		// tambien es posible añadir indices que no sean correlativos o indices alfanumericos
		// e incluso mezclar los dos tipos
		
		$miArray4 = array("cero" => 23, "uno" => 45, 2 => 76);
		
		// Recuperacion de valores de arreglos
		
		echo $miArray4["uno"] ."<br>" ;
		
		$num = 2;
		
		echo $miArray4[$num] ."<br>"
		
				
		// funcion list()
		
		
	?>	
</body>

</html>
