<?php 

require('./db.php');

spl_autoload_register(function($class){
	require('./controller/'.$class.'.php');
});

$controller = new PeopleController();
$controller->all();





// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";
