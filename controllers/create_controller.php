<?php
require_once('../models/post.php');
$item = $_POST['texts'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];    
$folder = "uploads/".$filename;
$file_name = $folder;
createPost(1, $item, $file_name);
header('location: ../views/post_view.php');