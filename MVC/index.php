<?php 
	//$_REQUEST
//localhost/CursoPHP2/MVC/?controller=User&method=index
//$_POST
//$_GET
	include './config/config.php';// ok
	session_start();
	if(isset($_SESSION['user'])){
		if(
			isset($_REQUEST['controller'] ) && //ok
			!empty($_REQUEST['controller']) && //ok
			!empty($_REQUEST['method']) && //ok
			file_exists(APP_Controller.$_REQUEST['controller'].'Controller.php') && //ok
			isset($_REQUEST['method']) //ok
			){
				$method=$_REQUEST['method'];//ok
				$controller=include APP_Controller.$_REQUEST['controller'].'Controller.php';
				if(method_exists($controller,$method)){
					$controller->$method($_REQUEST);
				}else{
				
					include APP_Controller.'HomeController.php';
					HomeController::index();
				}
		}else{
			include APP_Controller.'HomeController.php';
			HomeController::index();
		}
	}else{
			include APP_Controller.'LoginController.php';
			LoginController::index();
	}

 ?>