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
			<p>Welcome to the Admin Dashboard</p>


				<a href="Admin/Registration_request.php" class="btn">Registration Requests</a>
				<a href="Admin/man_admin.php" class="btn">Admin Informations</a>
				<a href="Admin/man_user.php" class="btn">User Information and Management</a>
			<a href="logout_form.php" class="btn">Logout</a>
			

		

		</div>
		
	</div>

</body>
</html>