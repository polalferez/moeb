<?

	$config = Config::singleton();

	$config->set('lang','esp');
	$config->set('base_title','Moebio');
	$config->set('base_url','http://localhost/moebiu/');
	$config->set('base_url_data','http://localhost/moebiu/data/');
	$config->set('db_prefix','');

	$config->set('big_h',327);
	$config->set('big_w',960);
	$config->set('img_content_w',503);
	$config->set('img_content_h',0);
	$config->set('thumb_h',180);
	$config->set('thumb_w',260);
	
    $config->set('validUser','test');
    $config->set('validPass','test');
    $config->set('tabla_default','agenda');

    $PATH = dirname(__FILE__);

	$config->set('path',$PATH); 
/*
	
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/../data/');
*/
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/data/');
	$config->set('files_dir',$PATH.'/data/files/');
	$config->seT('http_files_dir',$config->get('base_url_data').'files/');
	$config->set('controllersFolder', 'controllers/');
	$config->set('modelsFolder', 'models/');
	$config->set('viewsFolder', 'views/');
  
	$config->set('dbhost', 'localhost');
	$config->set('dbname', 'moebius');
	$config->set('dbuser', 'root');
	$config->set('dbpass', '');

/*
	$config->set('dbhost', 'qqe208.cucurni.com');
	$config->set('dbname', 'qqe208');
	$config->set('dbuser', 'qqe208');
	$config->set('dbpass', 'Contrasenya9');
*/