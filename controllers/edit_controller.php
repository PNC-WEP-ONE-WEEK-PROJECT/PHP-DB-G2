<?php
require_once('../models/post.php');
$written_text = $_POST['texts'];
$id = $_POST["postID"];
if(!empty($_FILES["uploadfile"]["name"])){
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "uploads/".$filename;
    $file_name = $folder;
    updatePost($id,$written_text,$file_name);
}else{
    updatText($id,$written_text);
}

header('location: ../views/post_view.php');
