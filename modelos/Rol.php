<?php
require_once 'Conexion.php';

class Rol {
	public $id;
	public $nombre;
	public $mensaje;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->mensaje = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM roles');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM roles WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO roles (Nombre, Mensaje ) VALUES ('$this->nombre','$this->mensaje' )";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM roles WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE roles SET Nombre = '$this->nombre', Mensaje = '$this->mensaje' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}