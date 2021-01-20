<?php
REQUIRE_ONCE("CONTROLLERS/config.php");
REQUIRE_ONCE("CORE/controller.php");
REQUIRE_ONCE("CORE/views.php");
REQUIRE_ONCE("CORE/conexion.php");
REQUIRE_ONCE("CORE/loadModel.php");
REQUIRE_ONCE("CORE/functions.php");

/*verificando si existe GET*/
if ($_GET && $_GET['controller'] ) 
{

	/*verificando si existe controlador*/
	$default_controller = $_GET['controller'];
	if (file_exists("CONTROLLERS/$default_controller.php"))
	{
		/*cargando controlador*/
		REQUIRE_ONCE("CONTROLLERS/$default_controller.php");
	}
	else
	{
		die("Controlador inexistente");
	}
}
else 
{
	
	if (file_exists("CONTROLLERS/$default_controller.php")) 
	{
		/*cargando contr*/
		REQUIRE_ONCE("CONTROLLERS/$default_controller.php");
	}
	else
	{
		die("Controlador inexistente");
	}

}

$Class = NEW $default_controller();



