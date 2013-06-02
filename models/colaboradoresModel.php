<?

// MAGMA 1.0
// colaboradores Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class colaboradoresModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM colaboradores ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM colaboradores WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO colaboradores (colaboradores,logo_img,url,orden) VALUES ('".$params['colaboradores']."','".$params['logo_img']."','".$params['url']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE colaboradores SET colaboradores = '".$params['colaboradores']."',logo_img = '".$params['logo_img']."',url = '".$params['url']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM colaboradores where id='".$params['id']."'");
			$consulta->execute();
		}
}
