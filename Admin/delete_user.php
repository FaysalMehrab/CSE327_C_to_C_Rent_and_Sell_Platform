
<?php   
     @include '../config.php';
    session_start();

    if(!isset($_SESSION['admin_name']))
    {
        header('location:../login_form.php');
    }

   
    $id = $_GET['id'];

    
    $sql = "DELETE FROM user_admin_info WHERE id=$id";

  
    $res = mysqli_query($conn, $sql);

    
    if($res==true)
    {
       
      $_SESSION['delete'] = "<div class='success'><b>User Deleted</div>";
        
        
         header('location:../Admin/man_user.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete User. Try Again Later.</div>";
         header('location:../Admin/man_user.php');
    }

?>
