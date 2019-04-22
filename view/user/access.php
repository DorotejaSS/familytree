<?php session_start(); ?>

	<?php if (!isset($_SESSION['user'])) : ?>

	<form action="form-process.php" method="post">
		<h2>Login</h2>

		<?php if (isset($_GET['err-login'])) : ?>
			<div style="background-color: red;">

				<?php foreach($_GET['err-login'] as $err) : ?>

					<p><?php echo $err; ?></p>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>

		<div>
			<label for="email">Email</label>
			<input type="email" name="email" id="email">
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</div>
		<input type="hidden" name="fn" value="login">
		<input type="submit" value="Login">
	</form>

	<form action="form-process.php" method="post">
		<h2>Register</h2>


		<?php if (isset($_GET['err-register'])) : ?>
			<div style="background-color: red;">

				<?php foreach($_GET['err-register'] as $err) : ?>

					<p><?php echo $err; ?></p>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>

		<?php if (isset($_GET['succ-register'])) : ?>
			<div style="background-color: green;">

				<?php foreach($_GET['succ-register'] as $succ) : ?>

					<p><?php echo $succ; ?></p>

				<?php endforeach; ?>

			</div>
		<?php endif; ?>

		<label for="first_name">First name</label>
		<input type="text" name="first_name" id="first_name">
	</div>
	<div>
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
		<div>
			<label for="role">Role (client or admin)</label>
			<input type="text" name="role" id="role">
		</div>
		<input type="hidden" name="fn" value="register">
		<input type="submit" value="Register">
	</form>


	<?php else: ?>

		<form action="form-process.php" method="post">
			<input type="hidden" name="fn" value="logout">
			<input type="submit" value="Logout">
		</form>

	<?php endif; ?>

