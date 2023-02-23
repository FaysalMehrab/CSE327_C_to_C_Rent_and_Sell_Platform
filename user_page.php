<?php
    @include 'config.php';
	session_start();

	if(!isset($_SESSION['user_name']))
	{
		header('location:login_form.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="container">

		<div class="content">
			
			<h3>Hello <span><?php echo $_SESSION['user_name']?></span> </h3>
			<p>This Is A User Page</p>
			<a href="login_form.php" class="btn">Login</a>
			<a href="logout_form.php" class="btn">Logout</a>
			<a href="register_form.php" class="btn">Register</a>

		</div>
		
	</div>

</body>
</html>