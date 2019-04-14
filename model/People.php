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
}