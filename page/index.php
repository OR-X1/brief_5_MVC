<?php

// session_start();


$params=explode('/',$_GET['p']);

if (isset($params[0]) & !empty($params[0])) 
{
	
	$controller=ucfirst($params[0]).'Controler';
	if (file_exists("controller/".$controller.'.php')) 
	{	
		require "controller/".$controller.".php";
		$obj=new $controller();
		if (isset($params[1]) & !empty($params[1])) 
		{
			
			$action=$params[1];
			if (method_exists($obj,$params[1] )) 
			{
				
				
					$obj->$action();
				
			}else
			{
				http_response_code(404);
				echo "this method doesn't exist";
			}
		}else
		{
			$action="index";
			$obj->$action();
		}

	}else
	{
		http_response_code(404);
		echo "this page doesn't exsit";
	}
	
}else
{
	require_once "controller/Home.php";
	$obj=new Home();
	$obj->index('login');
	
	
}