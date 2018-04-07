<?php 








	Class LoginController{
		public static function index(){			
			include APP_View.'/layouts/header.php';
			include APP_View.'/auth/login.php';
			include APP_View.'/layouts/footer.php';
		}
		public static function login($request=0){
			if(isset($request['correo']) && isset($request['password'])){

				include APP_Model.'User.php';
				$user = new User();


				$users=$user->where($request);
				if(count($users)>0){
					$_SESSION['user']=$users[0];
					header('Location: ./?controller=User&method=index');
				}else{
					header('Location: ./?controller=Login&method=index&error=Usuario no Encontrado&tipo=password');
				}


			}

		}
		public static function logout($request=0){
			session_destroy();
			header('Location: ./?controller=Login&method=index');
		}
	
	}

 ?>