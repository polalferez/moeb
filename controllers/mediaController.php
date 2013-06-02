<?
// MAGMA
// media Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class mediaController extends ControllerBase
{
		public function index(){
			require "models/mediaModel.php"; 	
			$items = new mediaModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("media.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/mediaModel.php"; 	
			$items = new mediaModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("mediaDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/mediaForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/mediaModel.php"; 	
			$items = new mediaModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/mediaForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/mediaModel.php"; 	
			$items = new mediaModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}