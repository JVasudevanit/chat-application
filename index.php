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
<link rel="stylesheet" href="css/sign_in.css" type="text/css">

    <title>Chatit login</title>
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign in</h2>
                <p>Login to Chat it</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter the email..." required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter the password..." autocomplete="off" required>
            </div>
            <div class="small">
                forgot password?
                <a href="forgot_pass.php">click here</a>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block btn-lg" type="submit" name="sign_in" >sign in</button>
            </div>
            <?php
                include('signin_user.php');
            ?>
        </form>
        <div class="text_center small" style="color:#67428b;">Don't have an account?
        <a href="signup.php">create one</a> 
        </div>
    </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>