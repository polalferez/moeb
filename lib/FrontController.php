<?php

include "JSON.php";
include "functions.php";
include "ControllerBase.php";
include "ModelBase.php";

class FrontController
{
	static function main()
	{
		
        header ('Content-type: text/html; charset=utf-8');
        mb_internal_encoding("UTF-8");
		require 'lib/Config.php'; //de configuracion
		require 'lib/SPDO.php'; //PDO con singleton
		require 'lib/View.php'; //Mini motor de plantillas         
		require 'config.php'; //Archivo con configuraciones.
   		//require_once 'language/'.$config->get('lang').'.php';
   		require 'urlHelper.php';
 
      	$PATH = dirname(__FILE__);
	//	$urlMapper = urlHelper::router(get_param('p'),get_param('m'));
		
		// renovamos sesion en caso de que no hayamos marcado Remember
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
		    // last request was more than 15 minutes ago
		    session_unset();     // unset $_SESSION variable for the run-time 
		    session_destroy();   // destroy session data in storage
		    echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$config->get('base_url').'">';
		    die('');
		} else if (isset($_SESSION['LAST_ACTIVITY'])){
			$_SESSION['LAST_ACTIVITY'] = time();
		}
		
		// Login?, proteccion fingerprint
		$fingerprint = md5($_SERVER['HTTP_USER_AGENT']."GYH");
		$LOGGED_IN = isset($_SESSION['initiated']) and $_SESSION['initiated'] and isset($_SESSION['accountId']) and $_SESSION['accountId'] > 0 and isset($_SESSION['HTTP_USER_AGENT']) and  $_SESSION['HTTP_USER_AGENT'] == $fingerprint;		
		
		// URL redireccion
		if(get_param('p') != -1) $controllerName = get_param('p');
		else  $controllerName = "homeController";
 
		if(get_param('m') != -1) $actionName = get_param('m');
		else $actionName = "index";

		$private = array(
			/*
array("honeymoonsController" => 'index'),
			array("honeymoonsController" => 'thanks'),
			array("honeymoonsController" => 'guests'),
			array("honeymoonsController" => 'gifts'),
*/
		);
		// si no estamos logeados no podemos acceder a los private[]
		if (!$LOGGED_IN and in_array(array($controllerName => $actionName), $private)){
    		$controllerName = 'homeController';
			$actionName = 'index';
		}
		// default pagina cuando estamos logeados
    	if ($LOGGED_IN and $controllerName=='pageController' and $actionName == 'index'){
			$controllerName = 'homeController';
			$actionName = 'index';
		}    	
		
		// controlador->metodo
	    $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
    
		if(is_file($controllerPath)) require $controllerPath;
		else  die('El controlador '.$controllerPath.' no existe - 404 not found');
		      
		if (is_callable(array($controllerName, $actionName)) == false){
			trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
			return false;
		}
		
		$controller = new $controllerName();
    	$controller->$actionName(); 
	}




    
   

}
?>