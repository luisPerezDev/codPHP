<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
require 'interfaceWeb.php';

class paginaWeb2 implements Web{
	
	public function setTitulo($titulo = "Titulo por defecto") {
		$this->titulo = $titulo;
	}

	public function getTitulo() {
		return $this->titulo;	
	} 
	
}	// fin de class


$paginaLuis = new paginaWeb2();
// $paginaLuis -> setTitulo("pagina de Luis");

echo "el nombre de la pagian  es : " . $paginaLuis -> getTitulo() . "<br />";


?>