<?php 


CLASS loadModel 
{
  PUBLIC FUNCTION __construct($model)
  {
    /*verificando si existe modelo*/
  	if (file_exists("MODELS/$model.php")) 
  	{
      /*cargando modelo*/
  		REQUIRE_ONCE("MODELS/$model.php");
  	}
  	else
  	{
  		die("no se puede encontrar el modelo");
  	}
  }
}