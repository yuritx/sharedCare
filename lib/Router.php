
<?php
	namespace /sharedCare/lib;

	class Router{
		
		private $rotas;
	
		
		public function__contruct(){
			
			$this->rotas();
			$this-> acharRota($this->getUrl());
		}
		
		public function rotas(){
			
			$rt['login'] = array('route' => '/', 'controller' => 'login', 'action' =>'login');
			$rt['cadatrar'] = array('route' => '/cadastar', 'controller' => 'CuidadorController', 'action' =>'cadastar');
			$rt['dashboard'] = array('route' => '/dashboard', 'controller' => 'CuidadorController', 'action' =>'dashboard');
			$rt['inserir'] = array('route' => '/inseriridoso', 'controller' => 'IdosoController', 'action' =>'inserir');
		    $rt['agenda'] = array('route' => '/agenda', 'controller' => 'IdosoController', 'action' =>'agendaIdoso');
		
			$this-> setRoutes($rt);
		}
		
		public function setRoutes($rts){
			$this-> $rotas = $rts;
		}
		
		public function acharRota($url){
			
			array_walk($this->$rotas, function($route), use($url){
				
				if($route['route'] == url){
					
				}
			});
				
		}
		
		public getUrl(){
			
			return parse_url($_SERVER['RQUEST_URI'], PHP_URL_PATH);
		}
	}
	
?>