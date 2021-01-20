<?php 


CLASS views
{
	PUBLIC FUNCTION __construct($view,$data=null)
	{
		/* ¿existe la vista?*/
		if (file_exists("./VIEW/$view")) {
			
			/*cargando vista*/

			/*
			
			NOTA : 

			LAS VISTAS PUEDEN RECIBIR O NO DATOS DEL MODELO O DEL MISMO CONTROLADOR,

			$data=null POR DEFECTO.

			$data DEBE SER EL SEGUNDO PARAMETRO QUE SE LE PASE A LA VISTA 

			 */
			REQUIRE_ONCE("./VIEW/$view");
		}
		else
		{
			die("Sitio no encontrado");
		}
	}
}