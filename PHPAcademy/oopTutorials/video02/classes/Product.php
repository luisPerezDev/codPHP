<?php
	class Product {
		// atributos
		public $type;
				
		// metodos
		public function setProductType($value){
			$this->type = $value;
		}

		public function getProductType() {
			return $this->type;
		}
	}	// fin de class Product	
?>