<?php
require_once('../models/post.php');
$surname = $_POST['user_name'];
$filename = $_FILES["file_name"]["name"];
$tempname = $_FILES["file_name"]["tmp_name"];    
$folder = "upload_profile/".$filename;
$file_image = $folder;
createFriends($surname, $file_image);
header('location: /profile.php');