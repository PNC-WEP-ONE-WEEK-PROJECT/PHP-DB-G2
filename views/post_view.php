<?php 
require_once "../templates/header.php";
?>
<!-------body-card------------------------------------ -->
<div class="container body-card d-flex justify-content-center">
    <section class="post post-top">
        <form action="../controllers/create_controller.php" method="post" enctype="multipart/form-data">
            <div class="icon d-flex justify-content-end mt-2">
                <a href="../home_page.php"><li class="fa fa-remove"></li></a>
            </div>
            <div class="content">
                <img src="../images/image1.png"class="logo-p">
                <div class="details ml-2 mt-0">
                    <p class="mt-3"><strong><?php echo "Sopha Rath"?></strong></p>
                    <div class="privacy ml-3 mb-2">
                        <i class="fas fa-user-friends"></i>
                        <span>Friends</span>
                        <a href="../views/add_friends.php"><i class="fas fa-caret-down"></i></a>
                    </div>
                </div>
            </div>

            <textarea placeholder="What's on your mind?" spellcheck="false" name="texts" required></textarea>
            <!-- ------Icon Reaction---------------------------------------------> 
              <div class="file_upload">
                  <label for="fill_text" class="fill_text">
                    <div class="upload d-flex justify-content-center"><img src="/images/gallery.png" alt=""></div><br>
                    <h4>UPLOAD PHOTOS</h4>
                  </label>
                  <input type="file" name="uploadfile" id="fill_text">
              </div>
              <button type="submit" class="form-control" name="submit">post</button>
        </form>
    </section>
</div>
<?php require_once ("../templates/footer.php")?>