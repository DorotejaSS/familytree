<?php

require('./db.php');
require('./classes/Router.php');

// autoloading all controllers
spl_autoload_register(function($class){
	require('./controller/'.$class.'.php');
});

// foreach (glob('./model/*') as $model_name) {
// 	require($model_name);
// }

$controller = new PeopleController();
$controller->getAll();

// $router = new Router();

