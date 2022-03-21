<?php
require_once('../models/comment.php');
if(!empty($_POST["commentText"])){
    addComment($_POST["postID"],1,$_POST["commentText"]);
}
header('location: ../home_page.php');
