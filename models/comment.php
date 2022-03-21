<?php
    require_once "database.php";
    function getComment()
    {
        global $db;
        $statement = $db->query("SELECT comment_id,comments.post_id as post_id,comment_text,comments.create_datetime as dateTime,posts.image from comments
        INNER JOIN posts ON comments.post_id = posts.post_id ORDER BY comment_id DESC");
        $comment = $statement->fetchAll();
        return $comment;
    }

// Add comment -------------------------------->
function addComment($post_id,$user_id,$comments)
{
    global $db;
    $comment = $db->prepare("INSERT INTO comments(post_id,user_id,comment_text) VALUES(:post_id,:user_id,:text);");
    $comment->execute([
    ':post_id' => $post_id,
    ':user_id' => $user_id,
    ':text' => $comments, 
    ]);
    return $comment->fetch() >0;
}

// Delete comments ---------------------------->
function deleteComment($id)
{
    global $db;
    $statement = $db->prepare("DELETE FROM comments WHERE comment_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

// Edite comments ---------------------------->
function updateComment($id,$comment)
{
    $statement = $db->prepare("UPDATE comments SET comment_text = :text WHERE post_id = :postID");
    $statement->execute([
        ':postID' =>$id,
        ':written_text' => $written_text,
        ':image' => $image
    ]);
}