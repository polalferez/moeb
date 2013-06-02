<?
// MAGMA
// about_moduls Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class about_modulsController extends ControllerBase
{
		public function index(){
			require "models/about_modulsModel.php"; 	
			$items = new about_modulsModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("about_moduls.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/about_modulsModel.php"; 	
			$items = new about_modulsModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("about_modulsDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/about_modulsForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/about_modulsModel.php"; 	
			$items = new about_modulsModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/about_modulsForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/about_modulsModel.php"; 	
			$items = new about_modulsModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}