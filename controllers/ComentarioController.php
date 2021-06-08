<?php
require_once 'models/comentario.php';

class comentarioController{
	
	public function index(){
		Utils::isIdentity();
		$comentario = new comentario();
		$comentario = $comentario->getAll();
		
		require_once 'views/usuario/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir comentario
			$comentario = new comentario();
			$comentario->setId($id);
			$comentario = $comentario->getOne();
			
		}
		
		require_once 'views/usuario/ver.php';
	}

	public function verPorIdProducto(){
		if(isset($_GET['id_producto'])){
			$id_producto = $_GET['id_producto'];
			
			// Conseguir comentarios
			$comentario = new comentario();
			$comentario->setId_producto($id_producto);
			$comentario = $comentario->funcionAll_idProduct($id_producto);
		}
		
		require_once 'views/usuario/ver.php';
	}

	public function crear(){
		Utils::isIdentity();
		require_once 'views/usuario/crear.php';
	}
	
	public function save(){s			
			$comentario1=isset($_POST['comentario'])  ? $_POST['comentario'] : false;
			$calificacion=isset($_POST['calificacion']) ? $_POST['calificacion'] : false;
			$id_producto=isset($_POST['id'])? $_POST['id'] : false;
			$nombre_usuario=isset($_POST['nombre_usuario'])? $_POST['nombre_usuario'] : false;
			
			//if($comentario && $calificacion && $id_producto && $id_usuario){
				$comentarios = new Comentario();
				$comentarios->setComentario($comentario1);
				$comentarios->setCalificacion($calificacion);
				$comentarios->setId_producto($id_producto);
				$comentarios->setnombre_usuario($nombre_usuario);
				$save = $comentarios->save();
		header('Location:http://localhost/proyectoDesarrolloSoftware-master/');
	}
	
}