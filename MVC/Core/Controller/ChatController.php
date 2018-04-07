<?php 
	Class ChatController{
		public function index(){
			
			include APP_View.'/layouts/header.php';
			include APP_Model.'Chat.php';
			$chat=new Chat();
			$tickets=$chat->getTickets($_SESSION['user']['id']);
			include APP_View.'/Chat/index.php';
			include APP_View.'/layouts/footer.php';
		}
		public function show($request=0){
			if(isset($request['ticket'])){
				include APP_View.'/layouts/header.php';
				include APP_Model.'User.php';
				$user=new User();
				include APP_Model.'Chat.php';
				$chat=new Chat();
				$tickets=$chat->where(['ticket'=>$request['ticket']]);
				include APP_View.'/Chat/show.php';
				include APP_View.'/layouts/footer.php';
			}
		}
		public function send($request=0){
			include APP_Model.'Chat.php';
			$peticion=$_POST;
			$peticion['ticket']=$_GET['ticket'];
			$chat=new Chat();
			$chat->save($peticion);
			header('Location: ./?controller=Chat&method=show&ticket='.$_GET['ticket']);
		}

	}

	return new ChatController();


 ?>