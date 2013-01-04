<?php

//  \

	include "paginaWeb.php";

	class paginaWebFormulario extends paginaWeb {
	
		function formularioInicio($accion) {
			echo ("<form action = \"$accion\"> ");
		}
	
		function formularioFin(){
			echo ("</form>");
		}
	
		function formularioCajaTexto($nombre){
			echo ("$nombre <input type = \"text\" name \"$nombre\" > ");
		}
	
		function formularioBoton(){
			echo (" <input type = \"submit\" name \"Submit\" value =  \"Enviar\"> ");
		}
		
		function mostrarPagina(){
			echo $this -> cabecera();
			echo $this -> formularioInicio("index.php");
			echo $this -> formularioCajaTexto("nombre");
			echo $this -> formularioBoton();
			echo $this -> formularioFin();
			echo $this -> pie();
		}
		
		
	}
	
	
	$formulario = new paginaWebFormulario("Pagina con formulario");
	$formulario -> mostrarPagina();

?>