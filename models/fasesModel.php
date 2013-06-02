<?

// MAGMA 1.0
// fases Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class fasesModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM fases ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM fases WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO fases (coursesId,title,duration,calendario,localization,content,orden) VALUES ('".$params['coursesId']."','".$params['title']."','".$params['duration']."','".$params['calendario']."','".$params['localization']."','".$params['content']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE fases SET coursesId = '".$params['coursesId']."',title = '".$params['title']."',duration = '".$params['duration']."',calendario = '".$params['calendario']."',localization = '".$params['localization']."',content = '".$params['content']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM fases where id='".$params['id']."'");
			$consulta->execute();
		}
}
