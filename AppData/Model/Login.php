<?php namespace AppData\Model;
	class Login{
		private $nombre, $contraseña;
    public function __construct(){
        $this->conexion= new conexion();
		}
		public function set($atributo,$valor){
				$this->$atributo=$valor;
		}
		public function get($atributo){
				return $this->$atributo;
		}
		
		public function verify()
    {
        $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m, u.id_tipo_usuario FROM persona p, usuario u, sexo s, tipo_usuario tu where u.nickname='{$this->usuario}' and u.password='{$this->contraseña}' and p.id_usuario=u.id_usuario and u.id_tipo_usuario=tu.id_tipo_usuario and p.id_sexo=s.id_sexo";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

	}
?>
