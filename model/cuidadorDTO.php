<?php
	class CuidadorDTO{

		public function buscaCuidador($email, $cpf){
		
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$buscarInformacao = $pdo->prepare("SELECT  email_cuidador, cpf_cuidador
										FROM cuidadores WHERE email_cuidador=:email and cpf_cuidador=:cpf");
		$buscarInformacao-> bindValue(":email", $email, PDO:: PARAM_STR);
		$buscarInformacao-> bindValue(":cpf", $cpf, PDO:: PARAM_STR); 		
		$buscarInformacao -> execute();
		$resultado = $buscarInformacao -> fetchAll(PDO::FETCH_OBJ);
		
				
			return $resultado;
		}
			
		
			public function inserirCuidador($cuidador){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
			
			
		$inserir = $pdo->prepare("INSERT INTO cuidadores(nome_cuidador, senha_cuidador, cpf_cuidador, email_cuidador,data_nascimento_cuidador)
								VALUES(:nome_cuidador, :senha_cuidador, :cpf_cuidador, :email_cuidador, 
								:data_nascimento_cuidador)");
		$inserir-> bindValue(":nome_cuidador", $cuidador ["nome"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":senha_cuidador",$cuidador["senha"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":cpf_cuidador", $cuidador ["cpf"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":email_cuidador", $cuidador ["email"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":data_nascimento_cuidador", $cuidador["data_nascimento"]); 
		
		echo"aqui";
		$inserir-> execute();
		}	
	
	
	
	}
?>