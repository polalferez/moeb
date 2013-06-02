<?
        
        $table_label = "courses";
        $default_order = "id ASC";
        $fields= array("coursestypesId","title","description","content","foto","duration","date_ini","price","profile","seats","cita","text","text_bold","img","peu","video","colaboradoresId","destacado_home","highlight","subhighlight");
        $fields_to_show = array("title","description","duration","date_ini","price","destacado_home","highlight","subhighlight");
        $fields_labels= array("coursestypesId","title","description","content","foto","duration","date","price","profile","seats","cita","text","text_bold","img","peu","video","colaborators","destacado_home","highlight","subhighlight");
        
        $fields_types=array("coursestypesId","literal","text","text","file_img","text","fecha","literal","text","number","text","text","literal","literal","literal","literal","multiselect","truefalse","truefalse","truefalse","number");
        
