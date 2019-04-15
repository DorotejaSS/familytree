<?php 
require_once('./db.php');


class User
{

	public function create($first_name, $last_name, $email, $password)
	{
		global $conn;

		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);

		$query = 'insert into users values (null, "'.$first_name.'", "'.$last_name.'", "'.$email.'", "'.$password.'")';
		
		$res = $conn->query($query);
		var_dump($res);
	}
}