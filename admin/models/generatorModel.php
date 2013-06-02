<?php
class generatorModel extends ModelBase
{
	
    public function generateModels(){
echo 'hello';
        $config = Config::singleton();
        
        $prefix = ''; //$config->get('db_prefix');
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();
        
        
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {

        	$tabla = $row[0];
        	if ($prefix == '' or strstr($tabla,$prefix)){
//        		$result = $this->db->query("SELECT * FROM  ".$tabla." limit 1");

$recordset = $this->db->prepare("DESCRIBE $tabla");
$recordset->execute();
$campos_a_mostrar = $types = '';
$xxx = $recordset->fetchAll(PDO::FETCH_ASSOC);

	foreach ($xxx as $field) {
		echo "<br>";
		$name = $field['Field'];

	
		if ($name != "id") $campos_a_mostrar .=  $name.',';
	 
	

		}
        		$campos_a_mostrar = substr($campos_a_mostrar,0,strlen($campos_a_mostrar)-1);
        		$types = substr($types,0,strlen($types)-1);
   
        
        
   	
        		$resultx =  '<?
// MAGMA
// '.$tabla.' Controller
// '.date("m-Y").'
// Beto Ayesa contacto@phpninja.info


class '.$tabla.'Controller extends ControllerBase
{
		public function index(){
			require "models/'.$tabla.'Model.php"; 	
			$'.'items = new '.$tabla.'Model();			
			$data = Array(
				  "items" => $items->getAll()
		          );         
			$this->view->show("'.$tabla.'.php", $data);
		}
		
		public function detail(){
			$params = gett();
			require "models/'.$tabla.'Model.php"; 	
			$'.'items = new '.$tabla.'Model();
			$data = Array(
				  "items" => $items->getById($'.'params["a"])
			      );	          
			$this->view->show("'.$tabla.'Detail.php", $data);
		}

		public function add(){
			$data = Array( "items" => array()     );	          
			$this->view->show("forms/'.$tabla.'Form.php", $data);
		}
		
		public function edit(){
			$params = gett();
			require "models/'.$tabla.'Model.php"; 	
			$'.'items = new '.$tabla.'Model();
			$data = Array(
				   "items" => $items->getById($'.'params["a"])         
		          );	          
			$this->view->show("forms/'.$tabla.'Form.php", $data);
		}
		
		public function search(){
			$params = gett();
			require "models/'.$tabla.'Model.php"; 	
			$'.'items = new '.$tabla.'Model();
	
			$json = new Services_JSON();	
			$data = Array( "json_items" =>  ""	);    
			$this->view->show("json.php", $data,false); 
		}


}';

$aux = explode(",",$campos_a_mostrar);
$cadena_insert = $cadena_update = $form = "";
$form_html = "<div class='inside'><h2>Título</h2><form class='form' action='".$tabla."/edit' method='POST' enctype='multipart/form-data'>";
foreach($aux as $i){

	$cadena_insert .= "'\".$"."params['$i'].\"',";
}
foreach($aux as $i){

	$cadena_update .= $i." = '\".$"."params['$i'].\"',";
}

foreach($aux as $i){



	$form_html.= "


<div class='control-group'><label class='control-label'>";
    					$form_html .= $i;
    					$form_html .= "</label>

<div class='controls'>";		
	$form_html .= "<input type='text' name='".$i."' value='<?= $"."items['".$i."'] ?>'></div></div>";

}
$form_html .= '<input type="hidden" name="id" value="<?= $'.'items["id"]; ?>"><input type="button" onclick="validate(this.form);"></form></div>';

$cadena_update = substr($cadena_update,0,-1);
$cadena_insert = substr($cadena_insert,0,-1);





$result_Models = '<?

// MAGMA 1.0
// '.$tabla.' Model
// '.date("m-Y").'
// Beto Ayesa contacto@phpninja.info

class '.$tabla.'Model extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($'.'id){
			$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' WHERE id=\'$'.'id\' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO '.$tabla.' ('.$campos_a_mostrar.') VALUES ('.$cadena_insert.')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE '.$tabla.' SET '.$cadena_update.'  where id='.'\''.'".$params['.'\''.'id'.'\']'.'."\'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM '.$tabla.' where id='.'\''.'".$params['.'\''.'id'.'\']'.'."\'");
			$consulta->execute();
		}
}
';

$path = dirname(__FILE__);
$aux = fopen($path.'/../../controllers/'.$tabla.'Controller.php','w');
	fwrite($aux,$resultx);
	fclose($aux);
	$aux = fopen($path.'/../../Models/'.$tabla.'Model.php','w');
	fwrite($aux,$result_Models);
	fclose($aux);

/*
$aux = fopen($path.'/../views/forms/'.$tabla.'Form.php','w');
	fwrite($aux,$form_html);
	fclose($aux);
*/
/*
echo ($resultx);
echo ($result_Models);
*/
      /*
  $table_label = "'.$tabla.'";
        $default_order = "id ASC";
        $fields= array('.$campos_a_mostrar.');
        
        $fields_labels= array('.$labels.');
        
        $fields_types=array('.$types.');
        
        
        
        		fwrite($aux,$resultx);
        		fclose($aux);
*/
        
	

	}



        }
        

	}
	
	
	      
    
    


}

?>




