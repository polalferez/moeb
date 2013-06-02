<?
// MAGMA
// news Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class newsController extends ControllerBase
{
		public function index(){
			require "models/newsModel.php"; 	
			$items = new newsModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("news_detail.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/newsModel.php"; 	
			$items = new newsModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("newsDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/newsForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/newsModel.php"; 	
			$items = new newsModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/newsForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/newsModel.php"; 	
			$items = new newsModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}