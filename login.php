<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Log In </title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
		<div class="wrapper">
			<h1>TIME MANAGEMENT SYSTEM </h1>
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="home.php"> Home </a></li> 
			<li><a href="login.php">LogIn</a></li>
		</ul>
	</nav>
	
	<div class="header">
		<h2> LogIn Here </h2>
	</div>
	
	<form action="login.php" method="post">
	
		<?php include('error.php'); ?>
		<div class = "input-group">
			<label> Username: </label>
			<input type="text" name="username"/>
		</div>
		<div class = "input-group">
			<label> Password: </label>
			<input type="password" name="password" />
		</div>
		
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>

	    <p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
  	</form>

  </body>
</html>
