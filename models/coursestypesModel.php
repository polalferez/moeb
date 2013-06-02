<?

// MAGMA 1.0
// coursestypes Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class coursestypesModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM coursestypes ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM coursestypes WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO coursestypes (coursestypes) VALUES ('".$params['coursestypes']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE coursestypes SET coursestypes = '".$params['coursestypes']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM coursestypes where id='".$params['id']."'");
			$consulta->execute();
		}
}
