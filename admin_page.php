<?php
    @include 'config.php';
	session_start();

	if(!isset($_SESSION['admin_name']))
	{
		header('location:login_form.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="container">

		<div class="content">
			
			<h3>Hi <span><?php echo $_SESSION['admin_name']?></span> </h3>
			<p>This Is An Admin Page</p>
			<a href="login_form.php" class="btn">Login</a>
			<a href="logout_form.php" class="btn">Logout</a>
			<a href="register_form.php" class="btn">Register</a>

		</div>
		
	</div>

</body>
</html>