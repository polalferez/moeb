<?

// MAGMA 1.0
// thoughts Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class thoughtsModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM thoughts ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM thoughts WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO thoughts (title,description,content,foto,peu,video,tags,data,destacado_home) VALUES ('".$params['title']."','".$params['description']."','".$params['content']."','".$params['foto']."','".$params['peu']."','".$params['video']."','".$params['tags']."','".$params['data']."','".$params['destacado_home']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE thoughts SET title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',foto = '".$params['foto']."',peu = '".$params['peu']."',video = '".$params['video']."',tags = '".$params['tags']."',data = '".$params['data']."',destacado_home = '".$params['destacado_home']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM thoughts where id='".$params['id']."'");
			$consulta->execute();
		}
}
