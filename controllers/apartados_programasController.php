<?
// MAGMA
// apartados_programas Controller
// 06-2013
// Beto Ayesa contacto@phpninja.info


class apartados_programasController extends ControllerBase
{
		public function index(){
			require "models/apartados_programasModel.php"; 	
			$items = new apartados_programasModel();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("apartados_programas.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/apartados_programasModel.php"; 	
			$items = new apartados_programasModel();
			$data = Array(
				  "items" => $items->getById($params["a"])
			      );	          
			$this->view->show("apartados_programasDetail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/apartados_programasForm.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/apartados_programasModel.php"; 	
			$items = new apartados_programasModel();
			$data = Array(
				   "items" => $items->getById($params["a"])         
		          );	          
			$this->view->show("forms/apartados_programasForm.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/apartados_programasModel.php"; 	
			$items = new apartados_programasModel();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}