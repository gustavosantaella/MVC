<?php 

CLASS defaultController EXTENDS controller
{
	PUBLIC FUNCTION __construct()
	{

		parent::__construct();
	}

	PUBLIC FUNCTION index()
	{
		HeaderPage();
		NEW views("index.php");
		FooterPage();
	}
}