<?

// MAGMA 1.0
// crossconcepts Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class crossconceptsModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM crossconcepts ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM crossconcepts WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO crossconcepts (date_ini,title,person,description,content,img,video,destacado_home,orden) VALUES ('".$params['date_ini']."','".$params['title']."','".$params['person']."','".$params['description']."','".$params['content']."','".$params['img']."','".$params['video']."','".$params['destacado_home']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE crossconcepts SET date_ini = '".$params['date_ini']."',title = '".$params['title']."',person = '".$params['person']."',description = '".$params['description']."',content = '".$params['content']."',img = '".$params['img']."',video = '".$params['video']."',destacado_home = '".$params['destacado_home']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM crossconcepts where id='".$params['id']."'");
			$consulta->execute();
		}
}
