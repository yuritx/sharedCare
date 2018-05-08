
<?php 

	namespace sharedCare/controller; 
	
	public class HomeCuidadorController{
		
		private $model;

		public function __construct(CudadoresModel $model) {
		$this->$$model = $model;
		}

		
		public function home(){
			if($_SESSION['logado'] == true){
				
			$listaIdodos = $this->model-> getListaIdosos(session_id()); 
			}
		}
		
			
			
	}
?>