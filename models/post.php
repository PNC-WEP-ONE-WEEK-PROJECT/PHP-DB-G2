<?php
    require_once "database.php";
function getItems()
{
    global $db;
    $statement = $db->query("SELECT post_id, written_text, image FROM posts") ;
    $items = $statement->fetchAll();
    return $items;

}
function createPost($user_id, $written_text, $image)
{   
    $target = "../images/uploads/" .$_FILES['uploadfile']['name'];
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


// File upload path



