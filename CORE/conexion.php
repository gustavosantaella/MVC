<?php 

CLASS conexion{

	PRIVATE $host;
	PRIVATE $port;
	PRIVATE $user;
	PRIVATE $pass;
	PUBLIC  $conex;
	PRIVATE $file;
	PRIVATE $opciones;


	PUBLIC  FUNCTION __construct(){

		$this->file   = parse_ini_file('datosBD.ini');
		$this->host   =$this->file['host'];
		$this->port   =$this->file['port'];
		$this->user   =$this->file['user'];
		$this->dbname =$this->file['dbname'];
		$this->pass   =$this->file['pass'];
		
		


	}
	

	
	PUBLIC FUNCTION conectar(){

		try{

			$conex = $this->conex = new PDO("pgsql:dbname=$this->dbname;host=$this->host;port=$this->port", $this->user, $this->pass,$opciones=[ 

				PDO::ATTR_STRINGIFY_FETCHES => PDO::ATTR_EMULATE_PREPARES,false,
				PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_CASE              => PDO::CASE_NATURAL,
				PDO::ATTR_ORACLE_NULLS      => PDO::NULL_EMPTY_STRING])or die("ERROR");


			return $conex;

		}catch(PDOException $e){

			echo"error";

		}
	}




	PUBLIC FUNCTION closeConex(){

		$this->file=null;
		$this->conex=null;
		$this->port=null;
		$this->user=null;
		$this->pass=null;
		$this->dbname=null;
		$this->host=null;
	}
}






?>

