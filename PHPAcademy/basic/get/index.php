<form action= "index.php" method="GET">
	Name : <br> <input type = "text" name = "name"> <br>
	Age : <br> <input type = "text" name = "age" size = 5> <br> <br>
	
	<!--  <input type = "hidden" name = "submitted" value="true"> -->
	
	<!--   -->
	
	<input type = "submit" value = "Submit">
	

</form>

<?php
	/*
	 * ejemplo de GET
	*
	*	get pasa los valores
	*  como parte de la URL
	*
	* los valores se deben de poner despues de
	* la URL segudio de un ? los
	* valores iran separados de la siguiente manea
	* nombreVariable=valor&nombreVariable=valor
	* 	http://localhost/PHPAcademy/basic/$_GET/index.php?name=luis&age=22
	*/
	

	
// 	$name = $_GET['name'];
// 	$age = $_GET['age'];
	
	
// 	echo 'I am ' . $name . ' and I am ' . $age. 'years old';
	
	/*
	 * como resultado tendremos que veremos
	 * los datos que hemos introducido en la barra 
	 * de navegacion
	 */
	
	
	// se realizara un pequeño formulario
	
	$name = $_GET['name'];
	$age = $_GET['age'];


	if ( isset($name) && isset($age) ) { 
		if( !empty($name) && !empty($age) ) {
			echo 'I am ' . $name . ' and I am ' . $age. 'years old';
		}
		else {
			echo 'Nothing enetered.';
		}
	}
	
?>