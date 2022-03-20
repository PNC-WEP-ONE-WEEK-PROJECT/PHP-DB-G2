<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
<?php  
session_start();//session starts here  
?>  
<div class="row">  
    <div class="col-md-4 col-md-offset-4">  
        <div class="login-panel panel panel-success bg-white p-4 w-100">  
            <div class="panel-heading d-flex justify-content-center">  
                <h3 class="panel-title">Sign In</h3>
            </div><hr>
            <div class="panel-body">  
                <form role="form" action="/views/login.php" method="post">  
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
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="login" >  
                    </fieldset> 
                    <div class="form_group d-flex justify-content-center mt-2">
                        <b>Not Already registered ?</b><a href="index.php">Sign up</a>
                    </div>
                </form>  
            </div>  
        </div>  
    </div>  
</div>  


