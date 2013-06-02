<?
// MAGMA
// coursefiles Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class coursefilesController extends ControllerBase
{
		public function index(){
			require "models/coursefilesModel.php"; 	
			$items = new coursefilesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("coursefiles.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/coursefilesModel.php"; 	
			$items = new coursefilesModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("coursefilesDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/coursefilesForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/coursefilesModel.php"; 	
			$items = new coursefilesModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/coursefilesForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/coursefilesModel.php"; 	
			$items = new coursefilesModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}