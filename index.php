<?php

require('./db.php');
require('./classes/Router.php');

// autoloading all controllers
spl_autoload_register(function($class){
	require('./controller/'.$class.'.php');
});

// NOTE: Here autoload models, custom function.


$router = new Router();


$controller = new PeopleController();
$controller->all();





// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";
