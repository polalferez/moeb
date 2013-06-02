<?
        
        $table_label = "agenda";
        $default_order = "date_ini DESC";
        $fields= array("date_ini","time_ini","venue","title","description","content","img","video","colaboradoresId","name_url","url","destacado_home");
        $fields_to_show =array("date_ini","time_ini","venue","title","description","img","destacado_home");

        $fields_labels= array("date","time","venue","title","description","content","image","video","colaborators","button title","button url","destacado_home");
        
        $fields_types=array("fecha","literal","literal","literal","text","tinymce","file_img","url","multiselect","literal","url","truefalse");
        
        
        