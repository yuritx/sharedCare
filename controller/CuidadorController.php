<?php

	include '../model/CuidadorDTO.php';
	$aux= new CadastroCuidadorController;
	$aux->cadastrarCuidador();
	class CadastroCuidadorController{
		
		
		 function __construct() {
			
		
	     }
		
	
	
		function novoCuidador(){
		
			include("/sharedCare/model/CadastroCuidador.html");
		
		}
		
		function cadastrarCuidador(){
			
			
			$cpf=$_POST["cpf"];
			$email=$_POST["email"];
			$cuidadorDTO = new CuidadorDTO;
			$existe = $cuidadorDTO -> BuscaCuidador($email, $cpf);
			var_dump($existe);
			if(sizeof($existe)>0){
					echo"aqio0";
				//header("sharecare.com.br/cuidadorexistente.php");
			}
			else{
					echo"22";
			$cuidador['nome']=$_POST["nome"].$_POST["sobrenome"];
			$cuidador['email'] = $email;
			$cuidador['senha'] = $_POST["senha"];
			$cuidador['data_nascimento'] = Date($_POST["nascimento"]);
			$cuidador['cpf']= $cpf;
			$cuidadorDTO-> InserirCuidador($cuidador);
			}
		}
		
	}
?>