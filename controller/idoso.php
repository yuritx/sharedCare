	
	<?php
		
		class Idoso{
			
			private $idade;
			private $nome;
			private $medicamentos;
			private $horarioMedicamento;
			private $alimentos;
			private $horarioAlimento;
			private $refeicao;
			private $consultas;
			private $alergias;
			private $registro;
			private $cpf;
						
			
			function Idoso($informacoes){
			
			}
			
			function getIdade(){
				
			}
			
			function getNome(){
				
			}
			
			function getMedicamentos(){
				
			}
			
			function getAlimentos(){
				
			}
			function getConsultas(){
				
			}
			function getAlergias(){
				
			}
			
			function getProximoMedicamento(){
				
			}
			function getProximaConsulta(){
				
			}
			
			function tomarMedicamento($medicamento, $horario){
							
			}
			
			function refeicao($alimento, $horario){
				$alimentos=sizeof($this->alimentos);
				$aux=0;		
				while($aux<$alimentos){
					if($this->alimentos[0] == $alimento){
				        	if(refeicao[$aux] == false){
							refeicao[$aux]=true;
							$this->horarioAlimento[$aux] = $horario;
						}
					}
				}
			}
			
			function consultar($data){
					
			}
			
			
		}
	?>
