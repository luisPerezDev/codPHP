<?php
	abstract class Web {
		protected $titulo;
		
		public function setTitulo($titulo  = "titulo por defecto"){
			$this -> titulo = $titulo;
		}
		
		
		abstract public function getTitulo();
		
	}

?>