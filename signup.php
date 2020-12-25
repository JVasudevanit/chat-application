<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/jpg" href="img/cha.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/signup.css" type="text/css">

    <title>Chatit signup</title>
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign up</h2>
                <p>Fill out this form and start chating with your friends.</p>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Enter your username..." required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Enter the password..." autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="user_email" placeholder="Enter the email..." required>
            </div>
            
            <div class="form-group">
                <label>Country</label>
                <select name="user_country" required class="form-control">
                    <option disabled>select your country</option>
                    <option>India</option>
                    <option>UK</option>
                    <option>Chinna</option>
                    <option>Bangladesh</option>
                    <option>Pakisthan</option>
                    <option>Afganisthan</option>
                </select>    
            </div>
            
            <div class="form-group">
                <label>Gender</label>
                <select name="user_gender" required class="form-control">
                    <option disabled>select your gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>    
            </div>
            <div class="form-group">
                <label class="checkbok_inline">
                    <input type="checkbox" required>I accept the 
                    <a href="#">Terms of use</a>&amp;
                    <a href="#">privacy policy</a> 
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block btn-lg" type="submit" name="sign_up" >sign up</button>
            </div>
        </form>
        <div class="text_center small" style="color:#67428b;">Already have an account:
        <a href="index.php">signin here</a> 
        </div>
    </div>
    <?php
        include("signup_user.php");
    ?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>