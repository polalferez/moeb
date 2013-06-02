<?
// MAGMA
// about_pages Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class about_pagesController extends ControllerBase
{
		public function index(){
			require "models/about_pagesModel.php"; 	
			$items = new about_pagesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("about_pages.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/about_pagesModel.php"; 	
			$items = new about_pagesModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("about_pagesDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/about_pagesForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/about_pagesModel.php"; 	
			$items = new about_pagesModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/about_pagesForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/about_pagesModel.php"; 	
			$items = new about_pagesModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}