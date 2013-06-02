<?
// MAGMA
// advisory_board Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class advisory_boardController extends ControllerBase
{
		public function index(){
			require "models/advisory_boardModel.php"; 	
			$items = new advisory_boardModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("advisory_board.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/advisory_boardModel.php"; 	
			$items = new advisory_boardModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("advisory_boardDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/advisory_boardForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/advisory_boardModel.php"; 	
			$items = new advisory_boardModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/advisory_boardForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/advisory_boardModel.php"; 	
			$items = new advisory_boardModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}