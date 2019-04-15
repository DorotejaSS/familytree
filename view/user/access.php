<form action="form-proccess.php" method="post">
	<h2>Login</h2>
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
	</div>
	<input type="hidden" name="fn" value="login">
	<input type="submit" value="Login">
</form>

<form action="form-proccess.php" method="post">
	<h2>Register</h2>


	<?php if (isset($_GET['err'])) : ?>
		<div style="background-color: red">

			<?php foreach ($_GET['err'] as $err) : ?>
				<p><?php echo $err ?></p>

			<?php endforeach; ?>

		</div>
	 <?php endif; ?>


		<label for="first_name">First name</label>
		<input type="text" name="first_name" id="first_name">
	</div>
	<div class="form-control">
		<label for="last_name">Last name</label>
		<input type="text" name="last_name" id="last_name">
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email">
	</div>
	<div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<label for="re_password">Re-Type Password</label>
		<input type="password" name="re_password" id="re_password">
	</div>
	<input type="hidden" name="fn" value="register">
	<input type="submit" value="Register">
</form>