
<?php
    @include '../config.php';
	session_start();

	if(!isset($_SESSION['admin_name']))
	{
		header('location:../login_form.php');
	}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Request Page</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>
<body>

	<div class="container-r">

		<div class="content-r">
			
			
			<p>This Is Registration Request Page</p>
			<a href="../logout_form.php" class="btn">Logout</a>
			<a href="../admin_page.php" class="btn">Main Menu</a>
            <a href="../Admin/man_user.php" class="btn">User Information and Management</a>
                <a href="../Admin/man_admin.php" class="btn">Admin Informations</a>
			
			

		</div>
		
	</div>

 <div class="main-content">
            <div class="wrapper">
                <h1>Manage Requests</h1>

                <br />


<?php
  if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['accept']))
                    {
                        echo $_SESSION['accept'];
                        unset($_SESSION['accept']);
                    }
?>


<table class="tbl-full">
                    <tr>
                    	<th>SI.NO.</th>
                        <th>ID</th>
                        <th>NID</th>
                        <th>NAME</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 

                       
                        $select = "SELECT * FROM req_reg";
                       
                        $result = mysqli_query($conn, $select);

                       
                        if($result==TRUE)
                        {
                            $count = mysqli_num_rows($result);

                            $sn=1;

                          
                            if($count > 0)
                            {
                                
                                while($rows=mysqli_fetch_assoc($result))
                                {
                                
                                    $id=$rows['id'];
                                    $nid=$rows['nid'];
                                    $name=$rows['name'];
                                    $email=$rows['email'];
                                    $user_type=$rows['user_type'];

                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>)</td>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $nid; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $user_type; ?></td>
                                        <td>

                                           <a href="../Admin/accept-req.php?id=<?php echo $id; ?>" class="btn-primary">Accept</a>
                                            <a href="../Admin/deny-req.php?id=<?php echo $id; ?>" class="btn-secondary">Deny</a>
                                            
                                        </td>
                                    </tr>

                                    <?php

                                }
                            }
                            else
                            {
                                echo "The Database Is Empty";
                            }
                        }

                    ?>


                    
                </table>

            </div>
        </div>
        


</body>
</html>
