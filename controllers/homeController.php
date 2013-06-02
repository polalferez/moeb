<?
// MAGMA
// home Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class homeController extends ControllerBase
{
		public function index(){
			require "models/homeModel.php"; 	
			$items = new homeModel();	
			require "models/about_modulsModel.php"; 	
			$about = new about_modulsModel();			
		     require "models/crossconceptsModel.php"; 	
			$cross = new crossconceptsModel();	    		
			$data = Array(
				  "items" => $items->getAll(),
  				  "about" => $about->getAll(),
  				  "cross" => $cross->getAll()
		          );         
			$this->view->show("index.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/homeModel.php"; 	
			$items = new homeModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("homeDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/homeForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/homeModel.php"; 	
			$items = new homeModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/homeForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/homeModel.php"; 	
			$items = new homeModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}