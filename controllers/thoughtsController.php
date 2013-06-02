<?
// MAGMA
// thoughts Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class thoughtsController extends ControllerBase
{
		public function index(){
			require "models/thoughtsModel.php"; 	
			$items = new thoughtsModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("thoughts.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/thoughtsModel.php"; 	
			$items = new thoughtsModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("thoughtsDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/thoughtsForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/thoughtsModel.php"; 	
			$items = new thoughtsModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/thoughtsForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/thoughtsModel.php"; 	
			$items = new thoughtsModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}