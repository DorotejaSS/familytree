<!DOCTYPE html>
<html>
<head>
	<title>Family Tree</title>
	<!-- <script type="text/javascript" src="./js/ajax-calls.js"></script> -->
<!-- 	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
 --></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="container">
		<header>
			<div class="navbar">
				<ul>
					<li class="active"><a href="people/index.php">Index</a></li>
					<li class="active"><a href="people/new.php">New</a></li>
				</ul>
			</div>
			<div class="title">
				<h1>Family tree</h1>
			</div>

		<?php if(isset($_SESSION['user'])) : ?>
			<div class="button">
				<ul>
					<form action="form-process.php" method="post">
						<input type="hidden" name="fn" value="logout">
						<input type="submit" value="Logout">
					</form>
				</ul>
			</div>

		<?php endif; ?>
		</header>
		





