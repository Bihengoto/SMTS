<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Register </title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
   <header>
		<div class="wrapper">
			<h1>TIME MANAGEMENT SYSTEM </h1>
		</div>
	</header>

	<div class="header">
		<h2> Register Here </h2>
	</div>

	<form action="server.php" method="post">


		<?php include('error.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>

		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
	
		<p>
		Already a member? <a href="login.php">Sign in</a>
		</p>

  	</form>
  </body>
</html>
