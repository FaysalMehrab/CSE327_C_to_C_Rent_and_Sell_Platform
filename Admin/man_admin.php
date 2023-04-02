
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
    <title>Admin Information Page</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">

</head>
<body>

    <div class="container-r">

        <div class="content-r">
            
            
            <p>Admin Information Page</p>


            <a href="../logout_form.php" class="btn">Logout</a>
            <a href="../admin_page.php" class="btn">Main Menu</a>

            <a href="../Admin/Registration_request.php" class="btn">Registration Requests</a>
            <a href="../Admin/man_user.php" class="btn">User Information and Management</a>

        </div>
        
    </div>

 <div class="main-content">
            <div class="wrapper">
                <h1>All Admin Informations: </h1>

                <br />


<table class="tbl-full">
                    <tr>
                        <th>SI.NO.</th>
                        <th>ID</th>
                        <th>NID</th>
                        <th>NAME</th>
                        <th>Email</th>
                        <th>User Type</th>
                        
                    </tr>

                    
                    <?php 


                           
                        //Query to Get all Admin
                        $select = "SELECT * FROM user_admin_info where user_type = 'admin'";
                        //Execute the Query
                        $result = mysqli_query($conn, $select);

                        //CHeck whether the Query is Executed or Not
                        if($result==TRUE)
                        {
                            // Count Rows to CHeck whether we have data in database or not
                            $count = mysqli_num_rows($result); // Function to get all the rows in database

                            $sn=1; //Create a Variable and Assign the value

                            //CHeck the num of rows
                            if($count > 0)
                            {
                                //WE HAve data in database
                                while($rows=mysqli_fetch_assoc($result))
                                {
                                    //Using While loop to get all the data from database.
                                    //And while loop will run as long as we have data in database

                                    //Get individual DAta
                                    $id=$rows['id'];
                                    $nid=$rows['nid'];
                                    $name=$rows['name'];
                                    $email=$rows['email'];
                                    $user_type=$rows['user_type'];

                                    //Display the Values in our Table
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?>)</td>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $nid; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $user_type; ?></td>
                                        <td>

                                          
                                            
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