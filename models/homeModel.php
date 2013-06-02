<?

// MAGMA 1.0
// home Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class homeModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM home ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM home WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO home (title,description,video,img,url,col1_title,col1_body,col2_title,col2_body,col3_title,col3_body) VALUES ('".$params['title']."','".$params['description']."','".$params['video']."','".$params['img']."','".$params['url']."','".$params['col1_title']."','".$params['col1_body']."','".$params['col2_title']."','".$params['col2_body']."','".$params['col3_title']."','".$params['col3_body']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE home SET title = '".$params['title']."',description = '".$params['description']."',video = '".$params['video']."',img = '".$params['img']."',url = '".$params['url']."',col1_title = '".$params['col1_title']."',col1_body = '".$params['col1_body']."',col2_title = '".$params['col2_title']."',col2_body = '".$params['col2_body']."',col3_title = '".$params['col3_title']."',col3_body = '".$params['col3_body']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM home where id='".$params['id']."'");
			$consulta->execute();
		}
}
