<?


final class text extends field{

	function view(){
		return  substr(strip_tags($this->value),0,100)."...";
	}
	function bake_field (){
		return "<textarea class='span6'  id=\"".$this->fieldname."\" name=\"".$this->fieldname."\"  >".$this->value."</textarea>";
	}
		
	function exec_add () {
			return addslashes(stripslashes($this->value));

	}
	function exec_edit () {
		if ($this->value != "")
				return addslashes(stripslashes($this->value));
		return '';
	}

}

							