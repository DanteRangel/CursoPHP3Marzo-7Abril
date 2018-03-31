<?php 








	Class LoginController{
		public static function index(){

			
			include APP_View.'/layouts/header.php';
			include APP_View.'/auth/login.php';
			include APP_View.'/layouts/footer.php';
		}
	}

 ?>