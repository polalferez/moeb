<?
// MAGMA
// colaboradores Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class colaboradoresController extends ControllerBase
{
		public function index(){
			require "models/colaboradoresModel.php"; 	
			$items = new colaboradoresModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("colaboradores.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/colaboradoresModel.php"; 	
			$items = new colaboradoresModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("colaboradoresDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/colaboradoresForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/colaboradoresModel.php"; 	
			$items = new colaboradoresModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/colaboradoresForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/colaboradoresModel.php"; 	
			$items = new colaboradoresModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}