	
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
				return $this->idade;
			}
			
			function getNome(){
				return $this->nome;
			}
			
			function getMedicamentos(){
				return $this->medicamentos;
			}
			
			function getAlimentos(){
				return $this->Alimentos;
			}
			function getConsultas(){
				return $this->consultas;
			}
			function getAlergias(){
				return $this->alergias
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
							return "correta";
						}
						return "feita";
					}
					return "false";
				}
			}
			
			function consultar($data){
					
			}
			
			
		}
	?>
