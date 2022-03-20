<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel bg-white p-4 w-100">  
            <div class="panel-heading">  
                <h3 class="d-flex justify-content-center text-primary">Facebook</h3><hr> 
            </div>  
            <div class="panel-body">  
                <form action="/views/register.php" method="post">  
                    
                    <div class="form-group">
                        <label>First Name</label><br>
                        <input class="form-control" name="firstName" placeholder="Surname" type="text" autofocus required>  
                    </div>  
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender"  value="M" required>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="F" required>
                        <label class="form-check-label">Female</label>
                    </div>
                    <div class="form-group ">  
                        <label for="Email Address"></label>
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>  
                    </div>  
                    <div class="form-group">  
                        <label>Password</label>
                        <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>  
                    </div>  
                    <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" name="country" required>
                            <option selected>Choose...</option>
                            <option>Cambodia</option>
                            <option>Thailand</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Italy</option>
                        </select>
                    </div>  
                    <div class="form-group"> 
                        <label for="start">Date of birth:</label>
                        <input type="date" name="date_of_birth" required>
                    </div>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Create Account" name="register" > 
                
                </form> 
                <div class="form_group d-flex justify-content-center mt-2">
                    <b>Already registered ?</b><a href="login.php">Login</a>
                </div>
            </div>  
        </div>  
    </div>  
</div>  
