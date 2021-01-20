<?php 

CLASS controller
{
	PUBLIC FUNCTION __construct()
	{
		/*¿EXISTE ACCION?*/
		if ($_GET && isset($_GET['action']))
		{
			$action = $_GET['action'];
			/*CARGADO METODO O FUNCION DEL CONTROLADOR */
			if (method_exists($this, $action)) 
			{
				$this->$action();
			}
			else
			{
				
				die("Pagina no encontrada");
			}


		}
		else
		{
			if (method_exists($this, "index")) 
			{
				$this->index();
			}
			else
			{
				die("index no definido");
			}

		}
	}
}