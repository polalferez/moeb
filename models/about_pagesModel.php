<?

// MAGMA 1.0
// about_pages Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class about_pagesModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM about_pages ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM about_pages WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO about_pages (title,content,modules,orden) VALUES ('".$params['title']."','".$params['content']."','".$params['modules']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE about_pages SET title = '".$params['title']."',content = '".$params['content']."',modules = '".$params['modules']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM about_pages where id='".$params['id']."'");
			$consulta->execute();
		}
}
