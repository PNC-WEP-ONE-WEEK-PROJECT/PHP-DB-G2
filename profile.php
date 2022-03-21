<?php 
require_once "templates/header.php";
require_once ("models/post.php");
?>
<div class="container body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="/controllers/create_controller.php" method="post" enctype="multipart/form-data">
        <img src="/images/image1.png" class="bg_img p-3">
        <div class="account d-flex">
          <label for="fill_text" class="fill_text ml-4">
            <div class="upload d-flex justify-content-center"><img src="/images/rady.jpg"class="logo_account"></div>
            <li class="fa fa-camera"></li>
          </label>
          <p>Sopha Rath</p>
        </div>
    </form>
  </section>
</div>
<div class="container body-card d-flex justify-content-center">
  <section class="post">
    <form action="/controllers/create_profile.php" method="post" enctype="multipart/form-data">
      <h3 class="mt-3">List all of Friends</h3>
    </form>
  </section>
</div>
<?php require_once "templates/footer.php" ?> 
