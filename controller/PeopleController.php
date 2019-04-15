<?php 

// TODO: move to autoloader
require('./classes/View.php');
require('./model/People.php'); 

class PeopleController
{
	public function getAll()
	{

		$people_model = new People();

		$view = new View();
		$view->info['people'] = $people_model->getAll();
		// $view->load('people', 'index');
		$view->load('people', 'new');
		// $view->load('user', 'access');
	}
}