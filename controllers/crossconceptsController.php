<?
// MAGMA
// crossconcepts Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class crossconceptsController extends ControllerBase
{
		public function index(){
			require "models/crossconceptsModel.php"; 	
			$items = new crossconceptsModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("crossconcepts.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/crossconceptsModel.php"; 	
			$items = new crossconceptsModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("crossconceptsDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/crossconceptsForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/crossconceptsModel.php"; 	
			$items = new crossconceptsModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/crossconceptsForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/crossconceptsModel.php"; 	
			$items = new crossconceptsModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}