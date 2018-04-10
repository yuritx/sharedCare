<?php

	$cpf=$_POST["cpf"];
	$email=$POST["email"];
	cuidadorDTO cuidadorDTO= new CuidadorDTO;
	$existe = cuidadorDTO -> buscaCuidador($cpf, $email);
		if(sizeof($existe){
			header(sharecare.com.br/cuidadorexistente.php);
		}
		else{
			cuidadorDTO-> cadastarCuidador($cpf, $email, )
		}
		
		

?>