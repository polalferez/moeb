<?
// MAGMA
// about_pages Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class aboutController extends ControllerBase
{
		public function index(){
			require "models/about_pagesModel.php"; 	
			$items = new about_pagesModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("about.php", $data);
		}
		public function page(){
			$params = gett();
			require "models/about_pagesModel.php"; 	
			require "models/about_modulsModel.php"; 
			require "models/advisory_boardModel.php"; 
			require "models/crossconceptsModel.php"; 			
			$advisory = new advisory_boardModel();
			$cross = new crossconceptsModel();
			$about = new about_modulsModel();
			$items = new about_pagesModel();			
			$data = Array(
				  "items" => $items->getById($params["a"]),
				  "about" => $about->getAll(),
				  "cross" => $cross->getAll(),
				  "board" => $advisory->getAll()

		          );         
			$this->view->show("about.php", $data);
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