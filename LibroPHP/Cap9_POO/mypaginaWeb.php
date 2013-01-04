<?php

class paginaWeb {
	
	public $titulo;
	
	// funcion constructor
// 	function __construct($titulo) {
// 		$this -> setTitulo($titulo);
// 	}
	
	function setTitulo($titulo = "titulo por defecto") {
		$this -> titulo = $titulo;
	}

	function  getTitulo() {
		return  $this -> titulo;
	}

	function  cabecera() {
		echo ('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
				<html xmlns = "http://www.w3.org/1999/xhtml" lang = "es" xml:lang="es">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<title> ');

		echo $this -> Titulo;

		echo ("</title> </head> <body>");
	}
	
	function cuerpo() {
		echo ("Este es el cuerpo de la pagina web");
	}

	function pie() {
		echo ("</body> </html>");
	}


	function mostrarPagina() {
		echo $this -> cabecera();
		echo $this -> cuerpo();
		echo $this -> pie();
	}

} // cierre class

$pagina = new paginaWeb();
$pagina -> setTitulo("pagian Web nueva");
$pagina -> mostrarPagina();


?>