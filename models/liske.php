<?php
require_once "database.php";
function getLike()
{
    global $db;
    $statement = $db->query("SELECT COUNT(post_id) as numberlike from post_likes GROUP by post_id;");
    $likes = $statement->fetchAll();
    return $likes;
}