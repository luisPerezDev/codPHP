<?php
	 $string = trim('blue   car                    sales');
	 
	 
	 // ña funcion explode divide la cadena en subcadenas
	 // separadas por un separador
	 // pero cuando son varios seguidos el
	 // resultado no es lo que esperabamos
	 
	 //$keyword = explode (' ', $string);
	 
	 
	 // preg_split 
	 $keyword = preg_split('/[\s]+/', $string);
	 
	 print_r($keyword);

	 
?>