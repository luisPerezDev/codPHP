<head>
<title>CREACION DE UN PORTAL CON MySQL Y PHP</title>
</head>

<body>
	<?php

	/*
	 * El uso de estas dos funciones es muy interesante, en especial para
	* el uso en formularios, ya que muchas veces el usuario no completa bien
	los campos de un formulario a la hora de introducir el e-mail, porque no
	pone bien el s�mbolo "@", aunque se nos pueden ocurrir infinidad de
	ideas a las que aplicar estas dos funciones.
	La diferencia entre estas dos funciones es que eregi ( ) no
	diferencia entre may�sculas o min�sculas, algo que a la hora de rellenar

	*/

	// $mail = "pepe@dominio.com";
	
	$mail = "pepedominio.com";
	/* En este caso, hemos puesto una variable con el contenido
	 pepe@dominio.com, para comprobar el funcionamiento de la funci�n
	eregi O, pero lo normal es que el contenido de la variable $mail lo
	obtengamos de un formulario. */
	if ( eregi ( "@", $mail))
	{
		print ("Los datos insertados en el formulario son correctos");
		/* Si no se encontrase el car�cter @ en la variables $mail, se mostrar�a
		 este mensaje, es decir, que es correcta la direcci�n de e-mail. */
	}
	else {
		print ("La direcci�n de e-mail no es correcta, por favor vuelva a
				introducirla");
		/* Si no se encuentra el car�cter @ en la variables $mail, se mostrar�
		 este mensaje, es decir, que la direcci�n de correo que se ha introducido
		no es correcta. */
	}




	?>

</body>

