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














































// ----------------------------Post Profile---------------------------------
function get_user()
{
    global $db;
    $statement = $db->query("SELECT user_id, surname, file_image FROM user_profiles") ;
    $users = $statement->fetchAll();
    return $users;

}

function createFriends($surname, $file_image)
{   
    $target = "../images/upload_profile/" .$_FILES['file_name']['name'];
    move_uploaded_file($_FILES['file_name']['tmp_name'],$target);
    global $db;
    $statement = $db->prepare("INSERT INTO user_profiles (surname, file_image) VALUES(:surname, :file_image);");
    $statement->execute([
        ':surname'=>$surname,
        ':file_image' =>$file_image,
    ]);
    return ($statement->rowCount() == 1);
}