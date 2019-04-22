<?php 

class Router
{

	private $controllers = array('people', 'user', 'admin');
	
	public function __construct()
	{
		if (!$this->checkIfControllerExits()){
			$this->show404();
		}

		$controllers = $this->instantiateController($controller_name);

		if (!$this->checkIfMethodExists($method)){
			$this->show404();
		}
		$controllers->method();
	}

	private function show404()
	{
		$view = new View();
		$view->load('page', '404');
	}

	private function instantiateController($controller_name)
	{
		// new $controller()
		$controler_name =  ucfirst($controllers) . 'Controller';
		return $controller_name;
		
	}


	private function getMethodName($name)
	{
		if ($_REQUEST['HTTP_METHOD'] === 'post' || $_REQUEST['HTTP_METHOD'] === 'get'){
			return $_REQUEST['HTTP_METHOD'] . ucfirst($name);
		}
		
		return $name;
	}

	private function checkIfMethodExists()
	{
		
	}

	private function checkIfControllerExits()
	{
		// $_REQUEST
		// $this->controllers
	} 

}