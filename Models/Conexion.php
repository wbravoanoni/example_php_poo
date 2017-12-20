<?php namespace Models;

class conexion
{

	private $datos=array(
	"Host"=>"localhost",
	"User"=>"root",
	"pass"=>"",
	"db"=>"php_poo"
	);

	private $con;

	public function __construct()
	{
	$this->con=new mysqli($this->datos['Host'],$this->datos['User'],$this->datos['pass'],$this->datos['db']);
		
		public function consultaSimple($sql)
			{
			$this->con->query($sql)
			}

		public function consultaRetorno($sql)
				{
				$datos=$this->con->query($sql)
				return $datos;
				}



	}



}






?>