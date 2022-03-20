<?php
require_once("../templates/header.php");
?>
<!-- ---------------------------body-card------------------------------------ -->
<div class="body-card d-flex justify-content-center">
  <section class="post post-top">
    <form action="../controllers/create_profile.php" method="post" enctype="multipart/form-data">
      <div class="d-flex justify-content-between">
        <h2 class="h2">Add Friends</h2>
        <a href="../profile.php"><li class="fa fa-remove icon mt-2"></li></a>
      </div><hr>
      <div class="contents d-flex justify-content-center mt-4" >
        <label for="fill_text" class="fill_text">
          <div class="upload d-flex justify-content-center"><img src="../images/user.png" class="logo_account"></div><br>
          <li class="fa fa-camera"></li>
        </label>
        <input type="file" name="file_name" id="fill_text">
      </div>
      <textarea class="text_area" placeholder="User Name :" spellcheck="false" name="user_name" required></textarea>
      <button type="submit" class="form-control" name="submit">ADD+</button>
    </form>
  </section>
</div>
<?php
require_once('../templates/footer.php');
?>