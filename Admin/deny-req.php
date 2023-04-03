
<?php   
     @include '../config.php';
    session_start();

    if(!isset($_SESSION['admin_name']))
    {
        header('location:../login_form.php');
    }

 
    $id = $_GET['id'];

   
    $sql = "DELETE FROM req_reg WHERE id=$id";

   
    $res = mysqli_query($conn, $sql);

    
    if($res==true)
    {

      $_SESSION['delete'] = "<div class='success'><b>Request Denied</div>";
       
        
         header('location:../Admin/Registration_request.php');
    }
    else
    {
      

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
         header('location:../Admin/Registration_request.php');
    }


?>
