<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
	
	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();
		
		require_once 'views/categoria/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();
			
			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		if(isset($_GET['id'])){
			$categoria_id = $_GET['id'];
		}else{
			header('Location:'.base_url);
		}
		if(!isset($counter) || $counter == 0){
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($categoria_id);
			$categoria = $categoria->getOne();

			// Añadir al categoria
			if(is_object($categoria)){
				$categoria->setNombre($_POST['nombre']);
			        $save = $categoria->save();
				);
			}
		}
		
		
		
		
		require_once 'views/categoria/crear.php';
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/index");
	}
	
}
