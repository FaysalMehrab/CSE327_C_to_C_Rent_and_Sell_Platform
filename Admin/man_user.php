
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
    <title>User Information and Management</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>
<body>

    <div class="container-r">

        <div class="content-r">
            
            
            <p>User Information and Management Page</p>

            
            <a href="../logout_form.php" class="btn">Logout</a>
            <a href="../admin_page.php" class="btn">Main Menu</a>
            <a href="../Admin/man_admin.php" class="btn">Admin Informations</a>
            <a href="../Admin/Registration_request.php" class="btn">Registration Requests</a>
            

        </div>
        
    </div>

 <div class="main-content">
            <div class="wrapper">
                <h1>Manage Users: </h1>

                <br />

<?php
  if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
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


                           
                        
                        $select = "SELECT * FROM user_admin_info where user_type = 'user'";
                        
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
                                     <a href="../Admin/delete_user.php?id=<?php echo $id; ?>" class="btn-secondary">Delete</a>
                                    
                                          
                                            
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
