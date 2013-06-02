<?
// MAGMA
// agenda Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class agendaController extends ControllerBase
{
		public function index(){
			require "models/agendaModel.php"; 	
			$items = new agendaModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("agenda.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/agendaModel.php"; 	
			$items = new agendaModel();
			$data = Array(
				  "items" => $items->getById($params["a"]),
				  "related" => $items->getRelated($params['a'],2)
			      );	          
			$this->view->show("agendaDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/agendaForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/agendaModel.php"; 	
			$items = new agendaModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/agendaForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/agendaModel.php"; 	
			$items = new agendaModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}