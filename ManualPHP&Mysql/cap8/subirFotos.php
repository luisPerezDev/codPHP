<html>


<head>
<title>CREACION DE UN PORTAL CON PHP y MySQL</title>
</head>

<body>
	
	<form action= "recepcion.php" method="post">
		<input type="hidden" name="lim_tamano" value="50000"> 
			<b> Formulario para el envío de ficheros: </b>
	  		<p>
				<b>Archivo a transferir<b><br> <input type="file" name="archivo"> <b/>
			</p>
			<p>
				<input type="submit" name="enviar" value="Aceptar">
			</p>
	
	</form> 
	
	<b> Instrucciones de uso: Pulse el botón Examinar y seleccione
		el archivo que desee y luego pulse el botón Enviar. 
	</b>
			
<body />

</html>