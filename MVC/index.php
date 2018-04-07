<?php 
	//$_REQUEST
//localhost/CursoPHP2/MVC/?controller=User&method=index
//$_POST
//$_GET
	include './config/config.php';// ok
	session_start();
		if(
			isset($_REQUEST['controller'] ) && //ok
			!empty($_REQUEST['controller']) && //ok
			!empty($_REQUEST['method']) && //ok
			file_exists(APP_Controller.$_REQUEST['controller'].'Controller.php') && //ok
			isset($_REQUEST['method']) //ok
			){

				$method=$_REQUEST['method'];//ok
				if($_REQUEST['controller']=='Login' && $_REQUEST['method']=='login'  || $_REQUEST['method']=='logout'){
					if(isset($_SESSION['user']) && $method!='logout'){
						require_once APP_Controller.'HomeController.php';
						HomeController::index();	
						return;		
					}else{

						$controller=include APP_Controller.$_REQUEST['controller'].'Controller.php';
						LoginController::$method($_POST);
						return;
					}
				}
				if(!isset($_SESSION['user'])){
						include APP_Controller.'LoginController.php';
						LoginController::index();
						return;
				}
				$controller=include APP_Controller.$_REQUEST['controller'].'Controller.php';
				if(method_exists($controller,$method)){
					$controller->$method($_REQUEST);
				}else{
				
					require_once APP_Controller.'HomeController.php';
					HomeController::index();
					return;
				}
		}else{
			require_once APP_Controller.'HomeController.php';
			HomeController::index();
			return;
		}
	

 ?>