<head>
<title>CREACION DE UN PORTAL CON MySQL Y PHP</title>
</head>

<body>
	<?php

	/*
	 * El uso de estas dos funciones es muy interesante, en especial para
	* el uso en formularios, ya que muchas veces el usuario no completa bien
	los campos de un formulario a la hora de introducir el e-mail, porque no
	pone bien el símbolo "@", aunque se nos pueden ocurrir infinidad de
	ideas a las que aplicar estas dos funciones.
	La diferencia entre estas dos funciones es que eregi ( ) no
	diferencia entre mayúsculas o minúsculas, algo que a la hora de rellenar

	*/

	// $mail = "pepe@dominio.com";
	
	$mail = "pepedominio.com";
	/* En este caso, hemos puesto una variable con el contenido
	 pepe@dominio.com, para comprobar el funcionamiento de la función
	eregi O, pero lo normal es que el contenido de la variable $mail lo
	obtengamos de un formulario. */
	if ( eregi ( "@", $mail))
	{
		print ("Los datos insertados en el formulario son correctos");
		/* Si no se encontrase el carácter @ en la variables $mail, se mostraría
		 este mensaje, es decir, que es correcta la dirección de e-mail. */
	}
	else {
		print ("La dirección de e-mail no es correcta, por favor vuelva a
				introducirla");
		/* Si no se encuentra el carácter @ en la variables $mail, se mostrará
		 este mensaje, es decir, que la dirección de correo que se ha introducido
		no es correcta. */
	}




	?>

</body>

