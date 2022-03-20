<?php
/**
 * Your code here
 */
require_once('../models/post.php');
(isset($_GET["id"]))?$id = $_GET["id"]:$id ="Null";
$deleted = deletePost($id);
if($deleted){
    header('location: ../home_page.php');
}else{
    echo "Cannot delete item with id".$id;
}
