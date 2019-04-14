<?php 

require('./classes/View.php');
require('./model/People.php');

class PeopleController
{
	public function all()
	{

	$people_model = new People();
	$people_model->getAll();

	$view = new View();
	$view->info['people'] = $people_model->getAll();
	$view->load();


	var_dump($view->info['people']);
	}
}