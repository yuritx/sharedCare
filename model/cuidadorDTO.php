<?php
	class cuidadorDTO{

		public function buscaCuidador($cpf, $email){
			try{
				$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
				} catch(PDOException $e){
					echo $e -> getMessage();	
				  }
		$buscarInformacao = $pdo->prepare(":cpf",$cpf PDO::PARAM_STR);
		$buscarInformacao = $pdo->prepare(":email",$cpf PDO::PARAM_STR);
		$resultado = $buscarInformacao -> fetchAll(PDO::FETCH_OBJ);
		return $resultado;
		}
	
	
	}
?>