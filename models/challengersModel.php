<?

// MAGMA 1.0
// challengers Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class challengersModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM challengers ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM challengers WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO challengers (coursesId,foto,title,organization,description,facebook,twitter,linkedin,orden) VALUES ('".$params['coursesId']."','".$params['foto']."','".$params['title']."','".$params['organization']."','".$params['description']."','".$params['facebook']."','".$params['twitter']."','".$params['linkedin']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE challengers SET coursesId = '".$params['coursesId']."',foto = '".$params['foto']."',title = '".$params['title']."',organization = '".$params['organization']."',description = '".$params['description']."',facebook = '".$params['facebook']."',twitter = '".$params['twitter']."',linkedin = '".$params['linkedin']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM challengers where id='".$params['id']."'");
			$consulta->execute();
		}
}
