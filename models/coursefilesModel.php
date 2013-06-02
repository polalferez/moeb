<?

// MAGMA 1.0
// coursefiles Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class coursefilesModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM coursefiles ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM coursefiles WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO coursefiles (coursesId,file,title_file) VALUES ('".$params['coursesId']."','".$params['file']."','".$params['title_file']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE coursefiles SET coursesId = '".$params['coursesId']."',file = '".$params['file']."',title_file = '".$params['title_file']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM coursefiles where id='".$params['id']."'");
			$consulta->execute();
		}
}
