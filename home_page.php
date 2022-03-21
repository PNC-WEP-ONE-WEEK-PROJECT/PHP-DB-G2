<?php
require_once("templates/header.php");
require_once ("models/post.php");
require_once ("models/comment.php");
// require_once ("models/like.php");
?>
<div class="container body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="/views/post_view.php">
      <div class="content mt-2">
        <img src="/images/image1.png"class="logo-p">
        <div class="details ml-2">
          <p class="mt-3">Sopha Rath</p>
          <div class="privacy">
            <i class="fas fa-user-friends"></i>
            <span>Friends</span>
            <a href="/views/add_friends.php"><i class="fas fa-caret-down"></i></a>
          </div>
        </div>
      </div><hr>
      <div class="btn_post d-flex justify-content-center btn-md-2">
        <button class="btn btn-outline-primary w-50">Create Post</button>
      </div>
    </form>
  </section>
</div>
<!---------------------------container-------------------------------------->
<?php 
    $items = getItems();
    foreach($items as $item) : 
?>
  <div class="container d-flex justify-content-center">
      <section class="post">
          <form action="../controllers/addcomment.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $item['post_id'];?>" name = "postID">
            <div class="content">
                   <div class="d-flex justify-content-start align-items-center">
                        <img src="../images/<?php echo 'image1.png'?>"class="logo-p">
                        <div class="details ml-2">
                            <p class="mt-5"><strong><?php echo "Sopha Rath";?></strong></p>
                            <div class="privacy ml-3">
                              <i class="fas fa-user-friends"></i>
                              <span>Friends</span>
                              <a href="/views/add_friends.php"><i class="fas fa-caret-down"></i></a>
                            </div>
                        </div>
                   </div>
                  <!-- Link to update the post------------------------- -->
                  <div class="for-delete p-2 w-50 d-flex justify-content-end">       
                    <div id ="form-d" class="form-d">
                        <a href="../images/'<?=$item['image'];?>" download><i class="fa fa-save" ></i>Save post</a><br>
                        <a href="../views/edit_view.php?id=<?php echo $item['post_id'];?>"><i class='fas fa-edit'></i>Edit post</a><br>
                        <a href="controllers/delete_post.php?id=<?php echo $item['post_id'];?>"><i class='far fa-trash-alt'></i>Delete post</a>
                    </div>
                      <h5 id="update" class="d-flex justify-content-center align-items-center text-align-center p-4 h5"style="width:30px;height:30px;border-radius:50%;font-size:2.5rem;">...</h5>
                  </div>
            </div>

                <!----Display Text and POST-------------------------------->
              <p class="p-3"><?=$item['written_text']?></p>
              <img class="w-100 h-50 p-0" src="../images/<?= $item['image']?>" alt="">

              <?php 
              // $likes = getLike();
              // foreach($likes as $like): 
              // print_r($likes);
              ?>
               <!-- ----Icon Reaction------------- ----------------------->
                <div class="icons_reach text-secondary mt-2 px-2 border-left-0 border-right-0 d-flex justify-content-between align-items-center"style="height:6vh" >
                    <h5 id ="like" class="p-2 mt-2 rounded-3 w-25 text-center">
                        <span class="mx-1">LIKE</span>
                        <span><li class="fa fa-thumbs-up"></span>  
                        <span class= "numberOfLike m-2" style="font-size:15px;"><?php //echo $like["numberlike"];?></span>
                    </h5>
                    <h5 id ="comment" class="comment px-3 mt-2 rounded-3 w-auto text-center">
                        <span class="">COMMENT</span> 
                        <span><li class="fas fa-comment-alt"></span>
                        <span class = "numberOfComment m-2"> </span>
                    </h5>
                </div>
                <?php //endforeach;?> 
                 <!----View Comment----------------------------- -->   
                <div class="view_comments w-50 m-auto d-flex justify-content-center align-item-center" style="height:4vh;">
                    <p class="w-25 h-25 text-primary">< VIEW ></p>
                </div>

                <!-- Add Comment------------------------------------>
                <div class="commenter" id= "write-comment">
                    <img class="rounded-circle m-3 p-1"src ="../images/<?= $item['image']?>" alt="">
                    <input id = "myid" class="controller w-75 p-2" type="text"name="commentText" placeholder="Write your comment...">
                </div>

              <!--Display comment---------------------------------->
              <?php 
                  $comments = getComment();
                  foreach($comments as $comment): 
              ?>
                <?php if($comment["post_id"]==$item["post_id"]):?>
                <!--Display comment----------- ---------bd-highlight ---------->
                <div class="comment_views mt-2 " id="view_id">
                    <div id ="display-comment" class="icon-delete-comment px-5 border-left-0 border-right-0 w-100">
                        <img class="rounded-circle m-3"src ="../images/<?= $comment['image']?>" alt="">
                        <div class="comment-face border-2 m-2" style="width:auto;height:auto;">
                            <h6 class="mt-2 ml-2"><strong><?php echo "Veangly Kroh"?></strong></h6>
                            <p class="m-2" ><?php echo $comment["comment_text"];?></p>                    
                        </dive> 
                    </div> 
                    <!-- Delete comment ------------------------- -->
                    <div class="delete-comment d-flex justify-content-center align-items-center">
                        <p class="dl-comment text-center">...</p>
                        <div id ="commentID" class="getDelete w-100 m-2 p-1 d-print-none"style="border-radius:1rem; display:none;">
                            <a href="update_comment=<?php echo $comment['comment_id'];?>" style=" text-decoration:none;color: #000;"><i class='fas fa-edit'></i>Edit post</a><br>
                            <a href="controllers/delete_comment.php?id=<?php echo $comment['comment_id'];?>" style=" text-decoration:none;color: #000;"><i class='far fa-trash-alt'></i>Delete post</a>
                        </div>
                    </div>
                </div>    
                <!--  date time of comment------->
                <p class="datime w-25 ml-5 d-flex justify-content-end" style=" font-size:14px"><?php //echo $comment['dateTime'];?></p>
                <?php endif;?> 
              <?php endforeach;?>   
         </form>
    </section>
</div>
<?php endforeach;?>
<?php
require_once('templates/footer.php');
?>