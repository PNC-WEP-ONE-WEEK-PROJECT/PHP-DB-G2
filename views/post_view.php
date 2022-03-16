<?php
require_once("../templates/header.php");
?>
<!-- ---------------------------body-card------------------------------------ -->
<div class="body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="#">
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
      <textarea placeholder="What's on your mind?" spellcheck="false" required></textarea>
      <!-- --------------icons--------------------------------------------->
      <div class="options display-2">
        <img src="../images/gallery.png" width="9%">
        <p>Add to Your Post</p>
      </div>
      <button class="form-control"><a href=""></a>Post</button>
    </form>
  </section>
</div>
<!---------------------------container-------------------------------------->
<div class="container d-flex justify-content-center">
    <section class="post">
      <form action="#">
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
         <!---------------------------Result-Message--------------------------------->
         <p class="p-3"></p>
        <!-- --------------icons------------------- -->
        <div class="options display-2">
           <img src="../images/rady.jpg"class="picture_post">
        </div>
        <div class="icons_reach">
          <a href=""><li class="fa fa-thumbs-up"></li></a>
          <a href=""><li class="fa fa-comment"></li></a>
        </div>
      </form>
    </section>
</div>
<?php
require_once('../templates/footer.php');
?>