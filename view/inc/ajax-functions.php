<?php 


$letters = (isset($_GET['people_letters'])) ? $_GET['people_letters'] : '';

$conn = new mysqli('localhost', 'root', '', 'familytree');
$query = 'select gender,
				first_name, 
				last_name, 
				dob as life,
				dod as life
				from people where first_name like "%'.$letters.'%"';
				
$res = $conn->query($query);
$found_people = [];
while ($people = $res->fetch_object()){
	array_push($found_people, $people);
}

$json_people = json_encode($found_people);
