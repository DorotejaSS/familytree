<?php 

	if (!isset($_REQUEST['fn'])){
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	require_once('./model/User.php');
	require_once('./model/People.php');

	session_start();

switch ($_REQUEST['fn']) {

	case 'login':

		$err = array();

		if(!isset($_POST['email']) || !isset($_POST['password'])){
			$err[] = 'Missing fields.';
		}

		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if ($email == ''){
			$err[] = 'Email is required.';
		}
		if ($password == ''){
			$err[] = 'Password name is required.';
		}


		if (count($err) > 0) {
			if (count($err) == 1){
				$err_str = '&err-login[]='. $err[0];
			} else {
				$err_str = implode('&err-login[]=', $err);
			}

			$err_str = '?' . substr($err_str, 1);
			header('Location: ' . $_SERVER['HTTP_REFERER'] .$err_str);
		}

		$user = new User();
		if ($user_data = $user->login($email, $password)) {
			$_SESSION['user'] = $user_data;
			header('Location: people/index.php');
		} else {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err-login[]=We couldn\'t find user with provided credentials.');
		}

		break;

	case 'logout':
		$user = new User();
		$user->logout();

		unset($_SESSION['user']);
		header('Location: www.familytree.com/access.php');

		break;

	case 'register':

		$err = array();

		if (!isset($_POST['first_name']) || 
			!isset($_POST['last_name']) || 
			!isset($_POST['email']) || 
			!isset($_POST['password']) || 
			!isset($_POST['re_password']) ||
			!isset($_POST['role'])
		){
			$err[] = 'Missing fields';
		}

		$first_name = trim($_POST['first_name']);
		$last_name = trim($_POST['last_name']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$re_password = trim($_POST['re_password']);
		$role = trim($_POST['role']);

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
		if($role == ''){
			$err[] = 'Role is required.';
		}


		if (count($err) > 0) {
			if (count($err) == 1){
				$err_str = '&err-register[]='. $err[0];
			} else {
				$err_str = implode('&err-register[]=', $err);
			}

			$err_str = '?' . substr($err_str, 1);
			header('Location: ' . $_SERVER['HTTP_REFERER'] .$err_str);
		}


		$user = new User();
		if ($user->checkIfAvailable($email)) {
			$is_created = $user->register($first_name, $last_name, $email, $password, $re_password, $role);
			if ($is_created){
				header('Location: ' . $_SERVER['HTTP_REFERER'] . '?succ-register[]=Successfully registered.');
			}
		} else {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?err-register[]=User with entered email already exists.');
		}
		break;

	case 'create':

		$create_ppl = new People();
		$created_ppl = $create_ppl->create();
		$msg = '';
		if ($created_ppl){
			$msg = '?succ[]=You\'ve successfully created a new member of the family.';
		} else {
			$msg = '?err[]=An error occured while creating a new member of the family.';
		}
		header('Location: ' . $_SERVER['HTTP_REFERER'] . $msg);
	break;


	default:

	break;
}