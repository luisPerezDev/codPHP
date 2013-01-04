<?php
	// se selecionara un registro y posterior a esto se actualizara
	// es decir se cambiara su contendido
	
	$query = "UPDATE`posts` SET
			  `title` = 'nuevo titulo',
			  `contents` = 'contenido de nuevo titulo'
			WHERE `id` = 3 ";
	
	mysql_query($query);
	
?>