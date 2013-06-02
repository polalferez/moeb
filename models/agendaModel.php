<?

// MAGMA 1.0
// agenda Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class agendaModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM agenda ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM agenda WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO agenda (date_ini,time_ini,venue,title,description,content,img,video,colaboradoresId,name_url,url,destacado_home) VALUES ('".$params['date_ini']."','".$params['time_ini']."','".$params['venue']."','".$params['title']."','".$params['description']."','".$params['content']."','".$params['img']."','".$params['video']."','".$params['colaboradoresId']."','".$params['name_url']."','".$params['url']."','".$params['destacado_home']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE agenda SET date_ini = '".$params['date_ini']."',time_ini = '".$params['time_ini']."',venue = '".$params['venue']."',title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',img = '".$params['img']."',video = '".$params['video']."',colaboradoresId = '".$params['colaboradoresId']."',name_url = '".$params['name_url']."',url = '".$params['url']."',destacado_home = '".$params['destacado_home']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM agenda where id='".$params['id']."'");
			$consulta->execute();
		}
}
