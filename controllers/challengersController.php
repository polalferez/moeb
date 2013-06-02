<?
// MAGMA
// challengers Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class challengersController extends ControllerBase
{
		public function index(){
			require "models/challengersModel.php"; 	
			$items = new challengersModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("challengers.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/challengersModel.php"; 	
			$items = new challengersModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("challengersDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/challengersForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/challengersModel.php"; 	
			$items = new challengersModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/challengersForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/challengersModel.php"; 	
			$items = new challengersModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}