<?php  
require_once("../models/database.php");
if(isset($_POST['register']))  
{  
    $surname=$_POST['firstName'];
    $gender=$_POST['gender'];
    $email_address=$_POST['email'];//same  
    $password=$_POST['pass'];//same  
    $country=$_POST['country'];
    $date_of_birth=$_POST['date_of_birth'];

    if($surname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($email_address=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($password=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from user_profiles WHERE email_address='$email_address'";  
    $run_query=mysqli_query($dbcon, $check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email_address is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into user_profiles (surname, gender, email_address, password, country, date_of_birth) VALUES ('$surname','$gender','$email_address','$password', '$country', '$date_of_birth')";  
    if(mysqli_query($dbcon, $insert_user))  
    {  
        require_once("../login.php");
    }  
} 
?>  