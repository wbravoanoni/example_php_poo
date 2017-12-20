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

$sql="SELECT t1.*,t2.nombre AS nombre_seccion 
	  FROM estudiantes t1 
	  INNER JOIN secciones t2 
	  ON t1.id_seccion=t2.id";

$datos=$this->con->consultarRetorno($sql);
return $datos;
	}


public function add(){


	$sql="INSERT INTO estudiantes(nombre,edad,promedio,imagen)
		  VALUES('{$this->nombre}','{$this->edad}',
		  '{$this->promedio}','{$this->nombre}')";

		    $this->con->consultaSimple($sql);

}

public function delete(){

$sql="DELETE FROM estudiantes 
	  WHERE id='{$this->nombre}';";

	   $this->con->consultaSimple($sql);
}

public function edit(){
	$sql="UPDATE estudiantes 
		  SET nombre='{$this->nombre}',edad='{$this->edad}',
		  promedio='{$this->promedio}',id_seccion='{$this->id_seccion}' 
	      WHERE id='{$this->id}'";
	$this->con->consultaSimple($sql);      
}

public function view(){

$sql="SELECT t1.*,t2.nombre AS nombre_seccion 
	  FROM estudiantes t1 
      INNER JOIN secciones t2 ON t1.id_seccion=t2.id 
	  WHERE t2.id='{$this->id}'";

$datos=$this->con->consultaRetorno($sql);
return $datos;
}




}


?>