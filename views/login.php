<?php  
require_once("../models/database.php");

if(isset($_POST['login']))  
{  
    $email_address=$_POST['email'];  
    $password=$_POST['pass'];  
  
    $check_user="select * from user_profiles WHERE email_address='$email_address'AND password='$password'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        require_once ("../home_page.php") ;
  
        $_SESSION['email']=$email_address;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {   
      require_once ("../login.php");
      header("Refresh:1.2; ../login.php");
    }  
}  
?>  