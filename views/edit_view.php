<?php 
require_once "../templates/header.php";
require_once "../models/post.php";
?>
<!-- Edit -->
 <div class="container body-card d-flex justify-content-center">
 <?php
   // Get the id of the item to update in query
   $id = $_GET["id"];
   // Get data for this item from database
   $item = getPostID($id);
    ?>
    <section class="post post-top">
        <form action="../controllers/edit_controller.php?id" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $item['post_id'];?>" name="postID">
            <div class="content">
                <img src="../images/image1.png"class="logo-p">
                <div class="details ml-2">
                    <p class="mt-5"><strong>Sopha Rath</strong></p>
                    <div class="privacy ml-3">
                        <i class="fas fa-user-friends"></i>
                        <span>Friends</span>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>   
            </div>
            <!-- Text area--------------- -->
            <textarea placeholder="What's on your mind...?" spellcheck="false" name="texts" required ><?php echo $item['written_text'];?></textarea>
            <!-- ------Icon Reaction---------------------------------------------> 
            <div class="file_upload editer">;
                <label for="fill_text" class="fill_text text-upload">
                    <div class="upload edit">
                        <img src="../images/<?php echo $item['image'];?>">
                    </div><br>
                    <div class="edit-up d-flex justify-content-center align-items-center"><h4>EDIT PHOTOS</h4></div>
                </label>
                <input type="file" name="uploadfile" id ="fill_text">
            </div>
            <button type="submit" class="form-control btn-edit w-100" name="submit">Post</button>
              
        </form>
    </section> 
</div> 
<?php require_once "../templates/footer.php" ?>
