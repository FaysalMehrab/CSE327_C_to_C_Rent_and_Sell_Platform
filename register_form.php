<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $nid =  $_POST['nid'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_admin_info WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_admin_info(nid,name, email, password, user_type) VALUES('$nid','$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register_form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="form_cont">
	
	<form action="" method="post">
		
      <h3>Fill Up the Form</h3><br><br>

      <?php

if(isset($error))
{
    foreach ($error as $error) {
    	echo '<span class = "error-msg">'.$error.'</span>';
    };
};

      ?>

      <input type="text" name="name" required placeholder="enter your name"><br><br>
      <input type="email" name="email" required placeholder="enter your @gmail"><br><br>
      <input type="number" name="nid" required placeholder="enter your NID number"><br><br>
      <input type="password" name="password" required placeholder="enter your password"><br><br>
      <input type="password" name="cpassword" required placeholder="confirm your password"><br><br>


<select name="user_type">
	
	<option value="user">User</option>
	<option value="admin">Admin</option>

</select><br><br>

<input type="submit" name="submit" value="Register now" class="form-btn"><br><br>
<p>Alredy have an account? <a href="login_form.php">Login</a> </p>
	</form>

</div>

</body>
</html>