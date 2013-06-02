<?

// MAGMA 1.0
// news Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class newsModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM news ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM news WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		
		public function getRelated($id,$limit){
			$consulta = $this->db->prepare("SELECT * FROM news WHERE id <> '".$id."' order by data DESC limit ".$limit);
			$consulta->execute();
			return $consulta->fetchAll();
		}
		
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO news (data,title,description,content,foto,peu,video,autor,name_url,url,destacado_home) VALUES ('".$params['data']."','".$params['title']."','".$params['description']."','".$params['content']."','".$params['foto']."','".$params['peu']."','".$params['video']."','".$params['autor']."','".$params['name_url']."','".$params['url']."','".$params['destacado_home']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE news SET data = '".$params['data']."',title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',foto = '".$params['foto']."',peu = '".$params['peu']."',video = '".$params['video']."',autor = '".$params['autor']."',name_url = '".$params['name_url']."',url = '".$params['url']."',destacado_home = '".$params['destacado_home']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM news where id='".$params['id']."'");
			$consulta->execute();
		}
}
