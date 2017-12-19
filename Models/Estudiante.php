<?php namespace Models

class estudiante
{
	private $id;
	private $nombre;
	private $edad;
	private $promedio;
	private $imagen;
	private $id_seccion;
	private $fecha;
	private $con;

	public function __construct(){
$this->con=new Conexion();

	}

	public functionlistar(){

$sql="SELECT t1.*,t2.nombre as nombre_seccion from estudiante t1 inner join seccion t2 ont1.id_seccion=t2.id"
$datos=$this->con->consultarRetorno($sql);
return $datos;
	}


public function add(){


	$sql="insert onto estudiantes(id,nombre,promedio,imagen)
			values()";

}

public function delete(){

$sql="insert onto estudiantes(id,nombre,promedio,imagen)
			values()";
			$this->con->consultaSimple();
}

public function edit(){
	$sql="UPDATE from ESTUDIANTES set NOMBRE={$this->nombre},edad='{$this->edad}',promedio={$this->promedio},id_seccion={$this->id_seccion} where id={$this->id}"
}

public function view(){

$sql="SELECT t1.*,t2.nombre as nombre_seccion fro  estudiantes t1 INNSER JOIN secciones t2 on t1.id_seccion=t2.id where id='{$this->id}'"

$datos=$this->con->consultaRetorno($sql);
return datos;
}




}


?>