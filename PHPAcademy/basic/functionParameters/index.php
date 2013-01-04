<?php

	// funcion con dos parametros
	// suma los dos numeros
	// y devuelve el resultado
	
// 	function add($num1, $num2) {
// 		$total = $num1 + $num2;
// 		return $total;
// 	}
	
// 	echo add(5, 10);
	
	// cuando la funcion se le pasan
	// menos parametros de los requeridos
	// mandara un mensaje de error
	
// 	function add($num1, $num2, $num3, $num4) {
// 		$total = $num1 + $num2;
// 		return $total;
// 	}
	
// echo add(5, 10);
	
	Function add() {
		$total = 0;
		// func_get_args() 
		// devuelve un array que corresponde con la lista de
		// argumentos pasados a la llamada de la funcion
		
		// print_r(func_get_args());
		
		/*
		Array
		(
    		[a] => apple
    		[b] => banana
    		[c] => Array
        		(
            		[0] => x
            		[1] => y
            		[2] => z
        		)
		)

		*/
		
		/* con esto lograremos que
		 * 
		 * pasar uno o varios argumentos
		 */
		foreach ( func_get_args() as $arg ){
			$total += (int)$arg;
		}
		
		return $total;
		
	}	// fin de funcion add()
	
	echo add(5, 10, 1);
	
	
	// funcion que adiona cadenas
	
	function append($initial) {
		$result = func_get_arg(0);
		
		// return func_get_arg(0);
		
		foreach(func_get_args() as $key => $value){
			// echo $key;
			if($key >= 1){
				$result .= ' ' . $value;
			}
		}
		
		return $result;
	} 
	
	// echo user_Data('Firs Name', 'last name', 'dob'');
	
	echo '<br> <br>';
	echo append('Alex', 'Jame', 'Garret');
	
?>