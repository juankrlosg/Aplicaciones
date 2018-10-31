<?php namespace AppData\Model;
	class Calificaciones {
		private $id;
    public function __construct() {
        $this->conexion= new conexion();
		}
		public function set($atributo,$valor) {
				$this->$atributo=$valor;
		}
		public function get($atributo) {
				return $this->$atributo;
		}
		public function getAlumns(){
			$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
						FROM persona p, usuario u
						WHERE p.id_usuario=u.id_usuario
						AND u.id_tipo_usuario=1
						ORDER BY p.ap_p ASC";
			$datos=$this->conexion->QueryResultado($sql);
			return $datos;
		}
		public function delete(){
			$sql="DELETE FROM usuario
			WHERE id_usuario='{$this->id}'";
			$this->conexion->QuerySimple($sql);
			$sql="DELETE FROM persona
			WHERE id_usuario='{$this->id}'";
			$this->conexion->QuerySimple($sql);
		}
		public function getOne(){
			$sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
						FROM persona p, usuario u
						WHERE p.id_usuario=u.id_usuario
						AND u.id_tipo_usuario=1
						AND p.id_usuario='{$this->id}'
						ORDER BY p.ap_p ASC";
			$datos=$this->conexion->QueryResultado($sql);
			return $datos;
		}
	}
?>
