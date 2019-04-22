<?php session_start();

if (!isset($_SESSION['user'])){
	header('Location: www.familytree.com');
}

?><!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<form action="form-process.php" method="post">
			<input type="hidden" name="fn" value="logout">
			<input type="submit" value="Logout">
		</form>


		<form action="form-process.php" method="post">
			<h2>Create</h2>
			<div>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name">
			</div>
			<div>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name">
			</div>
			<div>
				<label for="gender">Gender</label>
				<input type="radio" name="gender" value="f"> Female
				<input type="radio" name="gender" value="m"> Male
			</div>
			<div>
				<label for="dob">Date Of Birth</label>
				<input type="date" name="dob">
			</div>
			<div>
				<label for="checkbox">This person is not living</label>
				<input type="checkbox" name="living" id="living" onchange="valueChanged()"/>
			</div>

				<script type="text/javascript">

				    function valueChanged(){
				    	//if checked - show
				    if (document.getElementById('living').checked) 
				        {document.getElementById("doddiv").style.display = 'block';
				    }
				    else
				        document.getElementById("doddiv").style.display = 'none';
				    }

				</script>
			
			<div id="doddiv" style="display:none">
				<label for="dod">Date Of Death</label>
				<input type="date" name="dod" id="dod">
			</div>

			<input type="hidden" name="fn" value="create">
			<input type="submit" value="Create">
		</form>

	</body>
</html>

