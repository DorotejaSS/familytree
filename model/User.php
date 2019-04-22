<?php 
require_once('./db.php');


class User
{

	public function register($first_name, $last_name, $email, $password, $re_password, $role)
	{
		global $conn;

		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);
		$re_password = mysqli_real_escape_string($conn, $re_password);
		$role = mysqli_real_escape_string($conn, $role);

		$query = 'insert into users values (null, "'.$first_name.'", "'.$last_name.'", "'.$email.'", "'.$password.'", "'.$re_password.'", "'.$role.'",  0)';
		
		$res = $conn->query($query);
		return $res;
	}

	public function checkIfAvailable($email)
	{
		global $conn;
		$query = 'select * from users where email = "'.$email.'"';
		$res = $conn->query($query);

		return $res->num_rows == 0;
	}

	public function login($email, $password)
	{
		global $conn;
		$query = 'select * from users where email = "'.$email.'" and password = "'.$password.'"';
		$res = $conn->query($query);
		if ($res->num_rows == 1){
			$query = 'update users set logged_in = 1 where email = "'.$email.'"';
			$update_res = $conn->query($query);

			if ($update_res){
				$user = $res->fetch_object();	
				return $user;
			}
			return false;
		} else {
			return false;
		}
	}

	public function logout()
	{
		global $conn;
		$query = 'update users set logged_in = 0 where id = "'.$_SESSION['user']->id.'"';
		$res = $conn->query($query);
	}
}