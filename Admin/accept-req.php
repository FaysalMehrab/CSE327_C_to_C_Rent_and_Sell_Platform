
<?php   
     @include '../config.php';
    session_start();

    if(!isset($_SESSION['admin_name']))
    {
        header('location:../login_form.php');
    }

    
    $id = $_GET['id'];


$sql_insert = "INSERT INTO  user_admin_info SELECT * FROM req_reg WHERE id = $id";


if ($conn->query($sql_insert) === TRUE) {
    
    $sql_delete = "DELETE FROM req_reg WHERE id = $id";

   
    if ($conn->query($sql_delete) === TRUE) {
         $_SESSION['accept'] = "<div class='success'><b >Request Accepted </div>";
       
        
         header('location:../Admin/Registration_request.php');
    } else {
         $_SESSION['accept'] = "<div class='error'><b>Error</div>";
        
        
         header('location:../Admin/Registration_request.php');
    }
} else {
    $_SESSION['accept'] = "<div class='error'><b>Error</div>";
      
        
         header('location:../Admin/Registration_request.php');
}


$conn->close();

?>
