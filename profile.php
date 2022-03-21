<?php 
require_once "templates/header.php";
require_once ("models/post.php");
?>
<div class="body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="/controllers/create_controller.php" method="post" enctype="multipart/form-data">
        <img src="/images/image1.png" class="bg_img p-3">
        <div class="account d-flex">
          <label for="fill_text" class="fill_text ml-4">
            <div class="upload d-flex justify-content-center"><img src="/images/rady.jpg"class="logo_account"></div><br>
            <li class="fa fa-camera"></li>
          </label>
          <p><?php echo "Sopha Rath"?></p>
        </div>
    </form>
  </section>
</div>
<div class="body-card d-flex justify-content-center">
  <section class="post mt-3">
    <form action="/controllers/create_profile.php" method="post" enctype="multipart/form-data">
    <h3 class="mt-3">List all of Friends</h3>
      <?php 
        $users = get_user();
        foreach($users as $value) :  
      ?>
        <div class="card-body d-flex justify-content-between mt-1"> 
          <div class="content bg_content w-100 p-2">
            <img src="/images/<?=$value['file_image']?>"class="profile ml-3">
            <div class="details ml-2">
              <h3 class="mt-4"><?=$value['surname'];?></h3>
            </div>
          </div>
          <li class="fa fa-ellipsis-h icon"></li>
        </div>
      <?php endforeach;?>
    </form>
  </section>
</div>
<?php require_once "templates/footer.php" ?> 
