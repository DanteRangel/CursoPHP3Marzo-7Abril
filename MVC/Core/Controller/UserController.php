<?php 
	Class UserController{
		//ATRIBUTOS O CARACTERISTICAS


		//Comportammientos o Metodos
		public function index($request=0){

			
			include APP_View.'/layouts/header.php';
			include APP_Model.'User.php';
			include APP_Model.'Tipo.php';
			$user=new User();
			$users=$user->all();
			$tipo=new Tipo();
			$tipos=$tipo->all();
			include APP_View.'/User/index.php';
			include APP_View.'/layouts/footer.php';
		}
		public function edit($request=0){
			if(isset($_GET['id']) && !empty($_GET['id'])){
				$id=$_GET['id'];
				include APP_View.'/layouts/header.php';
				include APP_Model.'User.php';
				include APP_Model.'Tipo.php';
				$user=new User();
				$u=$user->find($id);
				$tipo=new Tipo();
				$tipos=$tipo->all();


				include APP_View.'/User/edit.php';
				include APP_View.'/layouts/footer.php';		
			}

		}
		public function show($request=0){
				include APP_View.'/layouts/header.php';
				include APP_Model.'Tipo.php';
				$tipo=new Tipo();
				$tipos=$tipo->all();


				include APP_View.'/User/show.php';
				include APP_View.'/layouts/footer.php';		
		}
		public function store($request=0){
				include APP_Model.'User.php';
				$user=new User();
				$user->save($_POST);			
				header('Location: ./?controller=User&method=index&success=Se guardo el usuario');

		}
		public function delete($id){
			if(isset($_GET['id']) && !empty($_GET['id'])){
				$id=$_GET['id'];
				include APP_Model.'User.php';
				$user=new User();
				$user->delete($id);				

				header('Location: ./?controller=User&method=index&success=Se ha eliminado el usuarios');
			}else{
				header('Location: ./?controller=User&method=index&error=No se ha podido eliminar al usuario');
			}
		}

	}

	return new UserController();


 ?>