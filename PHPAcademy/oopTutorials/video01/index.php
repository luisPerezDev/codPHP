<?php
	require_once 'classes/Product.php'; 
	
	$food = new Product();
	
	// $food->setProductType($value);
	$food->setProductType('Food');
	$food->getProductType();
	
	echo $food->getProductType();
?>