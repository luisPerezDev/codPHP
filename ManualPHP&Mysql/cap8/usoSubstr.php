<head>
	<title>CREACION DE UN PORTAL CON PHP y MYSQL</title>
</head>
<body bgcolor="#303030">
	<?php
	/*
	 * color de fondo de la pagina; en este caso seria un gris obscuro
	*/

	?>
<body text="#AOAOAO">
	<?php 
	/*
	 * color de la funente en este caso seria un color plata
	*/
	?>
<body leftmargin="200">
	<?php 
	/*
	 * distancia del eje horizontal a partir del cual se muetsra el texto
	* o imagenes en este caso a partir de 200 px a la derecha
	*/
	?>
<body topmargin="200">
	<?php 
	/*
	 * distancia del eje vertical a  partir del cual se muetsra
	* el texto o imagenes en este acaso a partir de 200 px hacia abajo
	*/
	?>

	<font face="Tahoma"> <?
	/* Tipo de fuente que utilizamos; en este caso seleccionamos Tahoma. */
	?> <font size="3"> <?
	// Tamaño de la fuente.
	?>
			<hr size="9" color="FFFFFF" width="30%" align="left"> <?
			/* Con esta última línea insertamos una línea horizontal, de un tamaño
			 vertical (size) de 9 pixel, en color blanco (FFFFFF), un tamaño
			horizontal del 30% (width) y alineada a la izquierda (align= "left'). */
			/* Con todas estas líneas hemos empezado a dar formato a nuestras
			 páginas. Como podemos ver, mejoramos la vistosidad de las mismas,
			añadiendo pequeños detalles, como pueden ser cambiar el color fondo de la página web, el color de la fuente, el tamaño y el tipo. */
			print (substr ("Bienvenido al Portal de Coches", 14));
			print ("<br>");
			print (substr ("Bienvenido al Portal de Coches", -6) );
			?>
			<hr size="9" color="ffffff" width="30%" align="left">

</body>

