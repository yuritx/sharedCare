<?php

	include '../model/IdosoDTO.php';
    class idosoController{
		
		public $model;
		private $view;
		
		function __construct() {
		$this -> model = new IdosoDTO;
		$this->agenda();
		
	     }
		
		function cadastrar(){
			$this-> view -> render('cadastrar', array());
		}
      
		function inserir(){
			$idoso['nome']=$_POST["nome"];
			$idoso['cpf'] = $_POST["cpf"];
			$idoso['rg'] = $_POST["rg"];
			$idoso['data_nascimento'] = Date($_POST["nascimento"]);
			$idoso['principal']= $_POST["principal"];
			$this-> model -> inserir($idoso);
		}
		
		function agenda(){
			date_default_timezone_set('America/Sao_Paulo');
			//$_SESSION['idoso'];
			//$idoso['nome']=$_POST["nome"];
			$prescricoes = $this->model -> agenda(1);
			
			$aux= 0;
			while ($aux<sizeof($prescricoes)){
				
			$atual = new DateTime;
			$frequencia = $prescricoes[$aux]-> frequencia_prescricao;
			$atual = $atual->format('d-m-Y H:i:s');
			$atual = strtotime($atual);
			$inicio =  $prescricoes[$aux] -> data_inicio;
			$inicio = strtotime($inicio);
			$horas = -1;
			
			if($atual<$inicio){
				$horas = -1;
			}
			else{
				$intervalo = ($atual - $inicio)/3600 ;
				
				if( $intervalo% $frequencia == 0){
					$horas = 0;
				}
				else{
					$horas = $frequencia - ($intervalo % $frequencia);
				}	
			}
			$prescricoes[$aux]-> horas = $horas;
			$aux++;
			}
			require '../view/agenda.html';
			//$this-> view -> render('agenda', $prescricoes);
		}
		
		function prescrever(){
			
		}
		
	}
		$x = new idosoController;
	?>
