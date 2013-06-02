<?

final class multiselect extends field{

	function view(){
		return $this->value;
	
	}
	function bake_field (){
	$f_fieldname = str_replace("Id","",$this->fieldname);
		return $this->bake_multicombo($this->config->get('db_prefix').$f_fieldname,$f_fieldname,$this->value);				
						
	}
		
	function exec_add () {
		if (is_array($this->value))
		return implode(",",$this->value);
		return '';

	}
	function exec_edit () {
		if (is_array($this->value))
		return 	implode(",",$this->value);
				return '';
	}
	
	
	function bake_multicombo($tablax2,$select_name,$ids_selected){
		$this->db = SPDO::singleton();			
		$data = $this->db->prepare("SELECT id, ".$select_name." from $tablax2 order by ".$select_name." ASC");	
		$data->execute();
		$arg = $data->fetchAll();
	$output = "<select name=\"".$select_name."[]\" id=\"".$select_name."\" MULTIPLE='multiple' size='6' width='100' ".">";

	//$this->toError("SELECT id, ".$select_name." from $tablax2 order by ".$select_name." ASC");
	$ids_selected = explode(",",$ids_selected);
	/* ///$this->toError(implod($ids_selected)); */
	foreach ($arg as $row){
		
		$output .= "<option value=\"".$row['id']."\"";
		if (in_array($row['id'] ,$ids_selected)) $output .= " selected";
		$output .=">".$row[$select_name]."</option>";
	}
	
	$output .= "</select>";
	$output .= "<br>You can select various values at once";
	//$this->toError("BAKE_MULTICOMBO intenta abrir la tabla ".$tablax2);
	return $output;
	}


}

