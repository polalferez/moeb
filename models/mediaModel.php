<?

// MAGMA 1.0
// media Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class mediaModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM media ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM media WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO media (title,description,content,foto,peu,video,data,autor,name_url,url,destacado_home) VALUES ('".$params['title']."','".$params['description']."','".$params['content']."','".$params['foto']."','".$params['peu']."','".$params['video']."','".$params['data']."','".$params['autor']."','".$params['name_url']."','".$params['url']."','".$params['destacado_home']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE media SET title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',foto = '".$params['foto']."',peu = '".$params['peu']."',video = '".$params['video']."',data = '".$params['data']."',autor = '".$params['autor']."',name_url = '".$params['name_url']."',url = '".$params['url']."',destacado_home = '".$params['destacado_home']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM media where id='".$params['id']."'");
			$consulta->execute();
		}
}
