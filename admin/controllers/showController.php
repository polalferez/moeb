<?php
class showController extends ControllerBase
{

    public function table(){
      $config = Config::singleton();
      require 'models/showModel.php';
		$items = new showModel();
     	$table = gett('a') != -1 ? gett('a') : $config->get('tabla_default');
$_SESSION['coursesId'] =  0 ;
$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "items_head" => $items->getItemsHead($table),
		          "items" => $items->getAll($table),
		          "HOOK_JS" => $items->js($table),
                  "table" => $table,
					"table_label" =>$items->getTableAttribute($table,'table_label'),
					"notification" => gett('i') != -1 ? 'Se ha guardado correctamente' : ''
		      		          
		          );

		
		$this->view->show("show.php", $data);
		
		
    }
    
	 public function courses(){
      $config = Config::singleton();
      require 'models/showModel.php';
		$items = new showModel();
     	$table = 'courses';
     	$coursestypesId=gett('a');
		$titles = array('','Full time programs','Short time programs','Specialized tracks');
		
		$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
		$_SESSION['course_label'] =   $titles[$coursestypesId] ;
		$_SESSION['course_type'] = $coursestypesId;

		$_SESSION['coursesId'] =  0 ;

		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "items_head" => $items->getItemsHead($table),
		          "items" => $items->getAllByField($table,'coursestypesId',$coursestypesId),
		          "HOOK_JS" => $items->js($table),
                  "table" => $table, 
					"table_label" => "Courses: ". $titles[$coursestypesId], //$items->getTableAttribute($table,'table_label'),
					"notification" => gett('i') != -1 ? 'Se ha guardado correctamente' : ''
		      		          
		          );

		
		$this->view->show("course.php", $data);
		
		
    }
    
     public function coursesdetail(){
      $config = Config::singleton();
      require 'models/showModel.php';
		$items = new showModel();
     	$table = 'courses';
     	$coursesId=gett('a');
$_SESSION['coursesId'] =  $coursesId ;
$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
    	require 'models/formModel.php'; 	

		$form = new formModel();



        $raw =  $form->getFormValues($table,$coursesId);
        
        	$_SESSION['course_label'] =   $raw['title'] ;
        
				$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "coursesId" => $coursesId,
		          "details" => $raw,
		          "table_fases" => $items->getAllByField('fases','coursesId',$coursesId),
		          "table_pages" =>  $items->getAllByField('apartados_programas','coursesId',$coursesId),
		          "table_challengers" => $items->getAllByField('challengers','coursesId',$coursesId),
		          		          "table_files" => $items->getAllByField('coursefiles','coursesId',$coursesId),
"items_head_fases" => $items->getItemsHead('fases'),
"items_head_pages" => $items->getItemsHead('apartados_programas'),
"items_head_challengers" =>$items->getItemsHead('challengers'),
"items_head_files" =>$items->getItemsHead('coursefiles'),
		          "HOOK_JS" => $items->js($table),
		          "table" => $table,
                  "table_label" => $raw['title'], 

					"notification" => gett('i') != -1 ? 'Saved successfully' : ''
		      		          
		          );
		$this->view->show("detail-course.php", $data);
		
		
    }
    
}
?>
