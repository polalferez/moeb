<?
// MAGMA
// home Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class homeController extends ControllerBase
{
		public function index(){
			require "models/homeModel.php"; 	
		    require "models/crossconceptsModel.php"; 	
			require "models/about_modulsModel.php"; 	
		    require "models/agendaModel.php"; 	
   		    require "models/newsModel.php"; 				
   		    require "models/thoughtsModel.php"; 				
   		    
			$items = new homeModel();	
			$about = new about_modulsModel();			
			$cross = new crossconceptsModel();	    		

			$agenda = new agendaModel();	    		
			$news = new newsModel();	    		
			$thou = new thoughtsModel();	    								
			
			$data = Array(
				  "items" => $items->getAll(),
  				  "about" => $about->getAll(),
  				  "cross" => $cross->getAll(),
  				  "events" => $agenda->getRelated(0,4),
  				  "news" =>$news->getRelated(0,4),
  				  "thoughts" =>$thou->getRelated(0,4),
  				  "highlight" => $courses->getHighlight(),
  				  "highlight2" =>$courses->getsubHighlight(),
  				  "other_programs" => $courses->getOtherPrograms(2)
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