
<?php
	
//CLASSE DTO DE BUSCA E INSERÇÃO DE IDOSOS NO BANCO
	class IdosoDTO{

		public function agenda($registro){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_shared_care","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$buscarInformacao = $pdo->prepare("SELECT `tipo_prescricao`, `permanente_prescricao`,
											`nome_idoso`, `data_inicio`, `dias_prescricao`,
											`frequencia_prescricao`, `descricao_prescricao`, 
											`nome_medicamento` FROM `prescricao`
											INNER JOIN `medicamentos` ON `medicamento` = `id_medicamento`
											INNER JOIN `idosos` ON `idoso` = `registro_idoso` 
											WHERE `registro_idoso`=:registro_idoso 
											AND (`data_inicio` BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)
											OR `permanente_prescricao`=:permanente_prescricao)");
		$buscarInformacao-> bindValue(":registro_idoso", $registro, PDO:: PARAM_INT);
		$buscarInformacao-> bindValue(":permanente_prescricao", 1, PDO:: PARAM_INT);
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
	
		
		
		public function inserirIdoso($idoso){
			try{
			$pdo =new PDO("mysql:host=localhost;dbname=bd_fgf","root","");
		} catch(PDOException $e){
			echo $e -> getMessage();	
		}
				
		$inserir = $pdo->prepare("INSERT INTO idosos(nome_idoso, cpf_idoso, rg_idoso,
									data_nascimento_idoso, doenca_principal)
									VALUES(:nome_idoso, :cpf_idoso, :rg_idoso, :data_nascimento_idoso,
											:doenca_principal)");
		$inserir-> bindValue(":nome_idoso", $idoso ["nome"], PDO:: PARAM_STR); 
		$inserir-> bindValue(":cpf_idoso", $idoso ["cpf"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":rg_idoso", $idoso ["rg"],  PDO:: PARAM_STR); 
		$inserir-> bindValue(":data_nascimento_idoso", $idoso ["data_nascimento"]); 
		$inserir-> bindValue(":doenca_principal",$idoso["principal"], PDO:: PARAM_INT); 
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
	}
?>

