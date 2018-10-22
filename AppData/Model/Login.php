<?php namespace AppData\Model;
	class Login {
		private $nombre, $contraseña, $nickname, $ap_p, $ap_m, $edad, $id_sexo, $id_tipo_usuario;
    public function __construct() {
        $this->conexion= new conexion();
		}
		public function set($atributo,$valor) {
				$this->$atributo=$valor;
		}
		public function get($atributo) {
				return $this->$atributo;
		}
		public function verify() {
        $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m, u.id_tipo_usuario FROM persona p, usuario u, sexo s, tipo_usuario tu where u.nickname='{$this->usuario}' and u.password='{$this->contraseña}' and p.id_usuario=u.id_usuario and u.id_tipo_usuario=tu.id_tipo_usuario and p.id_sexo=s.id_sexo";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }
		public function registrar() {

		}
		public function guardar() {
			$sql="INSERT INTO usuario (nickname, password, id_tipo_usuario) VALUES ('{$this->nickname}','{$this->contraseña}','{$this->id_tipo_usuario}')";
			$this->conexion->QuerySimple($sql);
			$sql="SELECT * FROM usuario WHERE nickname='{$this->nickname}' AND password='{$this->contraseña}'";
			$dato=$this->conexion->QueryResultado($sql);
			if (mysqli_num_rows($dato) > 0) {
					$datos=mysqli_fetch_assoc($dato);
			}
			if(isset($datos['id_usuario'])) {
				$sql="INSERT INTO persona(nombre, ap_p, ap_m, edad, id_sexo, id_usuario) VALUES ('{$this->nombre}','{$this->ap_p}','{$this->ap_m}','{$this->edad}','{$this->id_sexo}','{$datos['id_usuario']}')";
				$this->conexion->QuerySimple($sql);
				$_SESSION['id_usuario']=$datos['id_usuario'];
			}
		}
		public function registro(){

		}
		public function insertaUsuario(){
			$sql="INSERT INTO persona(nombre, ap_p, ap_m, edad, id_sexo, id_usuario) VALUES ('{$this->nombre}', '{$this->ap_p}', '{$this->ap_m}', '{$this->edad}', '{$this->id_sexo}', '{$this->id_tipo_usuario}')";
			$this->conexion->QuerySimple($sql);
		}
		public function getSex(){
			$sql="SELECT * FROM sexo";
			$datos=$this->conexion->QueryResultado($sql);
			return $datos;
		}
		public function getOne(){
			$sql="SELECT * FROM usuario WHERE nickname='{$this->nickname}' AND password='{$this->contraseña}'";
			$dato=$this->conexion->QueryResultado($sql);
			return $dato;
		}
		public function getTiUs(){
			$sql="SELECT * FROM tipo_usuario";
			$dato=$this->conexion->QueryResultado($sql);
			return $dato;
		}
	}
?>
