<?php
$abre = "c:/ficheros/texto.txt";
/* Determinamos el fichero y la ruta donde se encuentra, en este caso el
 fichero es texto.txt y se encuentra en c: /ficheros/. */
if (fopen ($abre, r))
{
	/* Abrimos ese fichero en modo lectura, para lo que utilizamos el
	 parámetro "r" .*/
	print ("El fichero se ha abierto.");
	/* Si lo encuentra y lo puede abrir, se muestra este mensaje. */
}
else

{
	print ("El fichero no se encuentra.");
	/* Si no lo encuentra o no lo puede abrir, se muestra este otro mensaje.
	 */
}

?>