<?php

class Comentario{
	private $id;
	private $comentario;
	private $calificacion;
	private $id_producto;
	private $nombre_usuario;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getComentario() {
		return $this->comentario;
	}

	function getCalificacion() {
		return $this->calificacion;
	}

	function getId_producto() {
		return $this->id_producto;
	}

	function getnombre_usuario() {
		return $this->nombre_usuario;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setComentario($comentario) {
		$this->comentario = $comentario;
	}

	function setCalificacion($calificacion) {
		$this->calificacion = $calificacion;
	}

	function setId_producto($id_producto) {
		$this->id_producto = $id_producto;
	}

	function setnombre_usuario($nombre_usuario) {
		$this->nombre_usuario = $nombre_usuario;
	}

	public function getAll(){
		$comentarios = $this->db->query("SELECT * FROM comentario ORDER BY id DESC;");
		return $comentarios;
	}

	public function All_idProduct(){
		$comentarios = $this->db->query("SELECT * FROM comentario WHERE id={$this->getId_producto()}");
		return $comentarios;
	}
	
	public function getOne(){
		$comentarios = $this->db->query("SELECT * FROM comentario WHERE id={$this->getId()}");
		return $comentarios->fetch_object();
	}
	
	public function save(){
		$sql = "INSERT INTO comentario VALUES(NULL, '{$this->getComentario()}', {$this->getCalificacion()}, '{$this->getId_producto()}', '{$this->getnombre_usuario()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	
	
	
}