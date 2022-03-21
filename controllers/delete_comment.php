<?php
require_once('../models/comment.php');

(isset($_GET["id"]))?$id = $_GET["id"]:$id ="Null";
$deleted = deleteComment($id);
if($deleted){
    header('location: ../home_page.php');
}else{
    echo "Cannot delete item with id".$id;}