<head>
	<title>CREACION DE UN PORTAL CON PHP Y MySQL</title>
</head>

<body>
	
		<form action = "ejemploCookie.php" method="post">
		
		<input type="hidden" name="action" value="setcookie">
		Nombre: <input type ="text" name ="nombre"> <br>
		<input type = "submit" value = "Enviar">
		<?php 
			if ($cookie == "setcookie") {
				setcookie ("nombre", $tunombre);
			}
		?>
		</form>
		
</body>
