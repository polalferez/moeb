<?
// MAGMA
// fases Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class fasesController extends ControllerBase
{
		public function index(){
			require "models/fasesModel.php"; 	
			$items = new fasesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("fases.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/fasesModel.php"; 	
			$items = new fasesModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("fasesDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/fasesForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/fasesModel.php"; 	
			$items = new fasesModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/fasesForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/fasesModel.php"; 	
			$items = new fasesModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}