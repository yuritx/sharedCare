
<?php
	
//CLASSE DTO DE BUSCA E INSERÇÃO DE IDOSOS NO BANCO
	class IdososDTO{

		public function getIdoso($registro){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$buscarInformacao = $pdo->prepare("SELECT  resgistro_idoso, idade_idoso, nome_idoso, 
											FROM idosos WHERE registro_idoso=:registro");
		$buscarInformacao-> bindValue(":registro", $registro, PDO:: PARAM_STR); 
		$buscarInformacao -> execute();
		$resultado = $buscarInformacao -> fetchAll(PDO::FETCH_OBJ);
				
			return $resultado;
		}
		
		public function getAllIdosos(){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
		$buscarInformacao = $pdo->prepare("SELECT registro_idoso, idade_idoso, nome_idoso FROM idosos");
		$buscarInformacao -> execute();
		$resultado = $buscarInformacao -> fetchAll(PDO::FETCH_OBJ);
				
			return $resultado;
		}	
	
		//BUSCA POR OUTRO PARAMETRO
		public function get??($??){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_fgf","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$buscarInformacao = $pdo->prepare("SELECT * FROM idosos WHERE ??_atual=:??");
		$buscarInformacao-> bindValue(":??", $??, PDO:: PARAM_INT); 
		$buscarInformacao -> execute();
		$resultado = $buscarInformacao -> fetchAll(PDO::FETCH_OBJ);
				
			return $resultado;
		}	
		
		public function inserirIdoso($idoso){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_fgf","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$inserir = $pdo->prepare("INSERT INTO idosos(nome, cpf, rg, data_nascimento, nacionalidade,
								 foto, nome_mae, nome_pai)
									VALUES(:nome, :cpf, :rg, :data_nascimento, :nacionalidade, :foto,
									:nome_mae, :nome_pai)");
		$inserir-> bindValue(":nome", $idoso ["nome"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":cpf", $idoso ["cpf"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":rg", $idoso ["rg"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":data_nascimento", $idoso ["data_nascimento"]); 
		$inserir-> bindValue(":nacionalidade",$idoso["nacionalidade"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":foto", $idoso ["foto"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":nome_mae", $idoso ["nome_mae"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":nome_pai", $idoso ["nome_pai"], PDO:: PARAM_STR); 
		$inserir-> execute();
		}	
	
		public function inserirAlergia($registroIdoso, $idAlergia){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_fgf","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$inserir = $pdo->prepare("INSERT INTO alergico(resgistro_idoso, id_alergia VALUES(:registro_idoso, :id_alergia");
		$inserir-> bindValue(":registro_idoso", $registroIdoso, PDO:: PARAM_INT); 
		$inserir-> bindValue(":idAlergia", $idAlergia, PDO:: PARAM_INT); 
		$inserir-> execute();
	}

?>


</html>