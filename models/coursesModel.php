<?

// MAGMA 1.0
// courses Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class coursesModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM courses ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM courses WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		
	
  				  
  		public function getHighlight(){
  			$consulta = $this->db->prepare("SELECT * FROM courses WHERE highlight > 0 and coursetypes ='1' limit 1 ");
			$consulta->execute();
			return $consulta->fetch();
  		}		  
  		public function getsubHighlight(){
  			$consulta = $this->db->prepare("SELECT * FROM courses WHERE subhighlight > 0 and coursetypes ='1' limit 1 ");
			$consulta->execute();
			return $consulta->fetch();
  		}
  		public function getOtherPrograms(){
  		
  		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO courses (coursestypesId,title,description,content,foto,duration,date_ini,price,profile,seats,cita,text,text_bold,img,peu,video,colaboradoresId,destacado_home,highlight,subhighlight,orden) VALUES ('".$params['coursestypesId']."','".$params['title']."','".$params['description']."','".$params['content']."','".$params['foto']."','".$params['duration']."','".$params['date_ini']."','".$params['price']."','".$params['profile']."','".$params['seats']."','".$params['cita']."','".$params['text']."','".$params['text_bold']."','".$params['img']."','".$params['peu']."','".$params['video']."','".$params['colaboradoresId']."','".$params['destacado_home']."','".$params['highlight']."','".$params['subhighlight']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE courses SET coursestypesId = '".$params['coursestypesId']."',title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',foto = '".$params['foto']."',duration = '".$params['duration']."',date_ini = '".$params['date_ini']."',price = '".$params['price']."',profile = '".$params['profile']."',seats = '".$params['seats']."',cita = '".$params['cita']."',text = '".$params['text']."',text_bold = '".$params['text_bold']."',img = '".$params['img']."',peu = '".$params['peu']."',video = '".$params['video']."',colaboradoresId = '".$params['colaboradoresId']."',destacado_home = '".$params['destacado_home']."',highlight = '".$params['highlight']."',subhighlight = '".$params['subhighlight']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM courses where id='".$params['id']."'");
			$consulta->execute();
		}
}
