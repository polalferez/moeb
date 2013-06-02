<?

// MAGMA 1.0
// advisory_board Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class advisory_boardModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM advisory_board ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM advisory_board WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO advisory_board (foto,title,organization,description,facebook,twitter,linkedin,orden) VALUES ('".$params['foto']."','".$params['title']."','".$params['organization']."','".$params['description']."','".$params['facebook']."','".$params['twitter']."','".$params['linkedin']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE advisory_board SET foto = '".$params['foto']."',title = '".$params['title']."',organization = '".$params['organization']."',description = '".$params['description']."',facebook = '".$params['facebook']."',twitter = '".$params['twitter']."',linkedin = '".$params['linkedin']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM advisory_board where id='".$params['id']."'");
			$consulta->execute();
		}
}
