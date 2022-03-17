<?php
require_once("../templates/header.php");
require_once ("../models/post.php");
?>
<div class="body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="/controllers/create_controller.php" method="post" enctype="multipart/form-data">
      <div class="content">
        <img src="../images/image1.png"class="logo-p">
        <div class="details ml-2">
          <p class="mt-5">Sopha Rath</p>
          <div class="privacy ml-3">
            <i class="fas fa-user-friends"></i>
            <span>Friends</span>
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
      </div>
      <textarea placeholder="What's on your mind?" spellcheck="false" name="item" required></textarea>
      <!-- --------------icons---------------------------------------------> 
      <div class="file_upload">
        <label for="fill_text" class="fill_text">
          <div class="upload"><img src="/images/gallery.png" alt=""></div><br>
          <h4>ULOAD PHOTOS</h4>
        </label>
        <input type="file" name="uploadfile" id="fill_text">
      </div>
      <button type="submit" class="form-control">Post</button>
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
        <form action="/controllers/create_controller.php" method="post" enctype="multipart/form-data">
          <div class="content">
            <img src="../images/image1.png"class="logo-p">
            <div class="details ml-2">
              <p class="mt-5">Sopha Rath </p>
              <div class="privacy ml-3">
                <i class="fas fa-user-friends"></i>
                <span>Friends</span>
                <i class="fas fa-caret-down"></i>
              </div>
            </div>
          </div>
          <!---------------------------Result-Message--------------------------------->
          <p class="p-3"><?=$item['written_text']?></p>
          <img class="w-100 h-50 p-0" src="../images/<?= $item['image'] ?>" alt="">
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
require_once('../templates/footer.php');
?>