
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   // $nid =  $_POST['nid'];
   $pass = md5($_POST['password']);
   // $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_admin_info WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login_form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="form_cont">
	
	<form action="" method="post">
		
      <h3>Login Now</h3><br><br>

     
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      
<input type="email" name="email" required placeholder="enter your email"><br><br>
     
<input type="password" name="password" required placeholder="enter your password"><br><br>

<input type="submit" name="submit" value="Login" class="form-btn"><br><br>


<p>Don't have an account? <a href="register_form.php">Register now</a> </p>

	</form>

</div>

</body>
</html>