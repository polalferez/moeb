<?

// MAGMA 1.0
// apartados_programas Model
// 06-2013
// Beto Ayesa contacto@phpninja.info

class apartados_programasModel extends ModelBase
{

		public function getAll(){
			$consulta = $this->db->prepare("SELECT * FROM apartados_programas ");
			$consulta->execute();
			return $consulta->fetchAll();
		}


		public function getById($id){
			$consulta = $this->db->prepare("SELECT * FROM apartados_programas WHERE id='$id' ");
			$consulta->execute();
			return $consulta->fetch();
		}
		public function getByFIELD(){
		
		}
		public function getByFieldandId(){
		
		}
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO apartados_programas (coursesId,title,description,content,cita,img,peu,video,orden) VALUES ('".$params['coursesId']."','".$params['title']."','".$params['description']."','".$params['content']."','".$params['cita']."','".$params['img']."','".$params['peu']."','".$params['video']."','".$params['orden']."')");
			$consulta->execute();
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE apartados_programas SET coursesId = '".$params['coursesId']."',title = '".$params['title']."',description = '".$params['description']."',content = '".$params['content']."',cita = '".$params['cita']."',img = '".$params['img']."',peu = '".$params['peu']."',video = '".$params['video']."',orden = '".$params['orden']."'  where id='".$params['id']."'");
			$consulta->execute();
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM apartados_programas where id='".$params['id']."'");
			$consulta->execute();
		}
}
