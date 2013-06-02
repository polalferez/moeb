<?

// MAGMA 1.0
// about_moduls Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class about_modulsModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM about_moduls ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM about_moduls WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO about_moduls (title,content,orden) VALUES ('".$params['title']."','".$params['content']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE about_moduls SET title = '".$params['title']."',content = '".$params['content']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM about_moduls where id='".$params['id']."'");
			$consulta->execute();
		}
}
