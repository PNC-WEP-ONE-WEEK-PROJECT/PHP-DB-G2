<?php
require_once("templates/header.php");
require_once ("models/post.php");
?>
<div class="body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="/views/post_view.php">
      <div class="content">
        <img src="/images/image1.png"class="logo-p">
        <div class="details ml-2">
          <p>Sopha Rath</p>
          <div class="privacy ml-3">
            <i class="fas fa-user-friends"></i>
            <span>Friends</span>
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
      </div>
      <button class="btn btn-primary mt-3">Create Post</button>
    </form>
  </section>
</div>
<!---------------------------container-------------------------------------->
<?php 
    $items = getItems();
    foreach($items as $item) : 
?>
  <div class="container d-flex justify-content-center">
      <section class="post mt">
          <form action="../controllers/create_controller.php" method="post" enctype="multipart/form-data">
              <div class="content">
                <img src="../images/image1.png"class="logo-p">
                <div class="details ml-2">
                      <p class="mt-5"><strong><?php echo "Sopha Rath";?></strong></p>
                      <div class="privacy ml-3">
                            <i class="fas fa-user-friends"></i>
                            <span>Friends</span>
                            <i class="fas fa-caret-down"></i>
                      </div>
                </div>
                  <div class="for-delete">
                    <label for="form-d">...</label>
                      <div id="form-d">
                        <a href="../images/'<?=$item['image'];?>" download><i class="fa fa-save" ></i> Save post</a><br>
                        <a href="../views/edit_view.php?id=<?php echo $item['post_id'];?>"><i class='fas fa-edit'></i>Edit post</a><br>
                        <a href="../controllers/delete_post.php?id=<?php echo $item['post_id'];?>"><i class='far fa-trash-alt'></i>Delete post</a>
                      </div>
                  </div>
              </div>

              <!---------------------------Result-Message--------------------------------->
              <p class="p-3"><?=$item['written_text']?></p>
              <img class="w-100 h-50 p-0" src="../images/<?= $item['image']?>" alt="">
              <!-- --------------icons------------------- -->
              <img src="" class="picture_post">
              <div class="icons_reach">
                  <a href=""><li class="fa fa-thumbs-up"></li></a>
                  <a href=""><li class="fa fa-comment"></li></a>
              </div>

          </form>
      </section>
  </div>
<?php endforeach; ?>
<?php
require_once('templates/footer.php');
?>