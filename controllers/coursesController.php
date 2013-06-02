<?
// MAGMA
// courses Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class coursesController extends ControllerBase
{
		public function index(){
			require "models/coursesModel.php"; 	
			$items = new coursesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("courses.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/coursesModel.php"; 	
			$items = new coursesModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("coursesDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/coursesForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/coursesModel.php"; 	
			$items = new coursesModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/coursesForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/coursesModel.php"; 	
			$items = new coursesModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}