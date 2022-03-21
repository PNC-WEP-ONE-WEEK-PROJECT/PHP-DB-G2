<?php
    require_once "database.php";
//GET all da
function getItems()
{
    global $db;
    $statement = $db->query("SELECT post_id, written_text, image FROM posts ORDER BY post_id DESC") ;
    $items = $statement->fetchAll();
    return $items;
}

// Create Post------------------------------------
function createPost($user_id, $written_text, $image)
{   
    $target = "../images/uploads/".$_FILES['uploadfile']['name'];
    move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target);
    
    global $db;
    $statement = $db->prepare("INSERT INTO posts(user_id, written_text, image) VALUES(:user_id, :written_text, :image);");
    $statement->execute([
        ':user_id'=>$user_id,
        ':written_text' => $written_text,
        ':image' => $image,
    ]);
    return ($statement->rowCount() == 1);
}

//Delete Post-----------------------------------------------
function deletePost($id)
{
    global $db;
    $statement = $db->prepare("DELETE FROM posts WHERE post_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

//GET : GET the id -------------------------------
function getPostID($id)
{
global $db;
$statement = $db->prepare("SELECT post_id, written_text,image FROM posts where post_id = :post_id");
$statement->execute([
    ':post_id'=>$id,
    ]);
    return $statement->fetch();
}

// Edit Photos-------------------------------------
function updatePost($id,$written_text,$image)
{
    $target = "../images/uploads/".$_FILES['uploadfile']['name'];
    move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target);
    global $db;
    $statement = $db->prepare("UPDATE posts SET written_text = :written_text,image =:image WHERE post_id = :postID");
    $statement->execute([
        ':postID' =>$id,
        ':written_text' => $written_text,
        ':image' => $image
    ]);
    return $statement->rowCount() > 0;
}
// if No text.......
function updatText($id,$written_text)
{
    global $db;
    $statement = $db->prepare("UPDATE posts SET written_text = :written_text WHERE post_id = :postID");
    $statement->execute([
        ':postID' =>$id,
        ':written_text' => $written_text,
    ]);
}


// Form log-----------------------------------------
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

// Register---------------------------
if(isset($_POST['register']))  
{  
    $surname=$_POST['firstName'];
    $gender=$_POST['gender'];
    $email_address=$_POST['email'];
    $password=$_POST['pass'];
    $country=$_POST['country'];
    $date_of_birth=$_POST['date_of_birth'];

    if($surname=='')  
    {  
        echo"<script>alert('Please enter the name')</script>";  
    //this use if first is not work then other will not show  
    }  
  
    if($email_address=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
    }  
  
    if($password=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    }  
    //here query check weather if user already registered so can't register again.  
    $check_email_query="select * from user_profiles WHERE email_address='$email_address'";  
    $run_query=mysqli_query($dbcon, $check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
    echo "<script>alert('Email $email_address is already exist in our database, Please try another one!')</script>";  

    }  
    //insert the user into the database.  
    $insert_user="insert into user_profiles (surname, gender, email_address, password, country, date_of_birth) VALUES ('$surname','$gender','$email_address','$password', '$country', '$date_of_birth')";  
    if(mysqli_query($dbcon, $insert_user))  
    {  
        require_once("../login.php");
    }  
}


// ----------------------------Post Profile---------------------------------
function get_user()
{
    global $db;
    $statement = $db->query("SELECT id, user_id, file_image FROM friends") ;
    $users = $statement->fetchAll();
    return $users;

}

function createFriends($id, $user_id)
{  
    global $db;
    $statement = $db->prepare("INSERT INTO friends (id, user_id) VALUES(:id, :file_user_id);");
    $statement->execute([
        ':id'=>$id,
        ':user_id' =>$user_id,
    ]);
    return ($statement->rowCount() == 1);
}

















