<?
// MAGMA
// coursestypes Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class coursestypesController extends ControllerBase
{
		public function index(){
			require "models/coursestypesModel.php"; 	
			$items = new coursestypesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("coursestypes.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/coursestypesModel.php"; 	
			$items = new coursestypesModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("coursestypesDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/coursestypesForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/coursestypesModel.php"; 	
			$items = new coursestypesModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/coursestypesForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/coursestypesModel.php"; 	
			$items = new coursestypesModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}