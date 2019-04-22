<?php 


class People
{	
	public $info = array();
	public function getAll()
	{
		
		global $conn;
		$query = 'select * from people';
		$resource = $conn->query($query);
		while ($people = $resource->fetch_assoc()) {
			$this->info[] = $people;
		}

		return $this->info;
	}

	public function create($first_name, $last_name, $gender, $dob, $dod, $user_id)
	{
		global $conn;
		$query = 'insert into people(first_name, last_name, gender, dob, dod, user_id) values ("'.$first_name.'", "'.$last_name.'", "'.$gender.'", "'.$dob.'", "'.$dod.'", '.$_SESSION['user']->id.')';
		$res = $conn->query($query);
		return $res;
	}

	public function getAllByUserId($user_id)
	{
		global $conn;
		$query = 'select * from people where user_id = ' . $user_id;
		$res = $conn->query($query);
		return $res;
	}
}