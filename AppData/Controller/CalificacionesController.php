<?php namespace AppData\Controller;
	use AppData\Model\Calificaciones;
	class CalificacionesController{
		private $calificaciones;
		function __construct(){
				$this->calificaciones=new Calificaciones();
		}
		function index(){

		}

		function ver(){
			$datos=$this->calificaciones->getAlumns();
			return $datos;
		}

		function eliminar($id){
			$this->calificaciones->set("id",$id);
			$this->calificaciones->delete();
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					swal({
						title: "Success",
						text: "Eliminado correctamente",
						timer: 2000
					});
					setTimeout(function(){
						window.location.href="<?php echo URL ?>Calificaciones/ver"
					},2100);
				})
			</script>
			<?php
		}
		function get($id){
			$this->calificaciones->set("id",$id);
			$datos=$this->calificaciones->getOne();
			if(mysqli_num_rows($datos)>0){
				$datos=mysqli_fetch_assoc($datos);
			}
			echo json_encode($datos);
		}

		function __destruct(){

		}
	}
?>
