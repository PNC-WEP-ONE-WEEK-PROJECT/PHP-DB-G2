<?php
/**
 * Your code here
 */
require_once('../models/post.php');
(isset($_GET["id"]))?$id = $_GET["id"]:$id ="Null";
$deleted = deletePost($id);
if($deleted){
    header('location: ../views/post_view.php');
}else{
    echo "Cannot delete item with id".$id;
}
