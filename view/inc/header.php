<!DOCTYPE html>
<html>
<head>
	<title>Family Tree</title>
	<script type="text/javascript" src="./js/ajax-calls.js"></script>
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="container">
		<header>
			<div class="navbar">
				<ul>
					<li class="active"><a href="#">Index</a></li>
					<li class="active"><a href="#">New</a></li>
				</ul>
			</div>
			<div class="title">
				<h1>Family tree</h1>
			</div>

			<div class="button">
				<ul>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
		</header>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="inputPeople" placeholder="Search trough your family">
						<small id="peopleHelp" class="form-text text-muted">We'll search people for you...</small>
					</div>
				</form>
		<div class="table">
			<table border="1" cellpadding="10" cellspacing="0" id="people_list">
				<caption>People created</caption>
				<thead>
					<tr>
						<th>Gender</th>
						<th>First name</th>
						<th>Last name</th>
						<th>Life</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->info['people'] as $key => $people) : ?>
						<tr>
							<td><?php echo $people['gender']; ?></td>
							<td><?php echo $people['first_name']; ?></td>
							<td><?php echo $people['last_name']; ?></td>
							<td><?php echo $people ['life']; ?></td>
							<td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							<td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>





