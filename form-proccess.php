<?php 

if (!isset($_REQUEST['fn'])){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

require_once('./model/User.php');


switch ($_REQUEST['fn']) {
	case 'login':
		var_dump('logovanje');
		break;

	case 'register':
		if (!isset($_POST['first_name']) || 
			!isset($_POST['last_name']) || 
			!isset($_POST['email']) || 
			!isset($_POST['password']) || 
			!isset($_POST['re-password'])
		){
			$err[] = 'Missing fields';
		}

		$first_name = trim($_POST['first_name']);
		$last_name = trim($_POST['last_name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$re_password = trim($_POST['re_password']);

		if ($first_name == ''){
			$err[] = 'First name is required.';
		}
		if ($last_name == ''){
			$err[] = 'Last name is required.';
		}
		if ($email == ''){
			$err[] = 'Email is required.';
		}
		if ($password == ''){
			$err[] = 'Password name is required.';
		}
		if ($re_password == ''){
			$err[] = 'Re-Type Password is required.';
		}

		if($password != $re_password){
			$err[] = 'Password do not match.';
 		}
 	

 		if (count($err) > 0){
 			if (count($err) == 1){
 				$err_str = '&err[]='. $err[0];
 			} else {
 				$err_str = implode('&err[]=', $err);
 			}

 			$err_str = '?' . substr($err_str, 1);
 			header('Location: ' . $_SERVER['HTTP_REFERER'] .$err_str);
 		}

 		$user = new User();
 		$user->create($first_name, $last_name, $email, $password);

 		
	

		break;

	case 'logout':
		
		break;
	
	default:
		# code...
		break;
}