<?php
	require 'IdosoDTO.php';
	
	
	$idoso = new IdosoDTO;
	
	$primeiro = $idoso -> getIdoso(1);
	var_dump($primeiro);

?>