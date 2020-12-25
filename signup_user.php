<?php

include("connection.php");

if(isset($_POST['sign_up']))
{
    $name=htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
    $pass=htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
    $email=htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
    $country=htmlentities(mysqli_real_escape_string($con,$_POST['user_country']));
    $gender=htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));

    $rand=rand(1,6);

    if($name=="")
    {
        echo"<script>alert('We can not verify your name');</script>";
    }
    if(strlen($pass)<8)
    {
        echo"<script>alert('The password should have atleast 8 character');</script>";
        exit();
    }
    
    $check_email="select * from users where user_email='$email'";

    $run_email=mysqli_query($con,$check_email);
    $check=mysqli_num_rows($run_email);

    if($check==1)
    {
        echo"<script>alert('$name registered successsfully ');</script>";
        echo"<script>window.open('index.php','_self');</script>";
        exit();
    }
    if($rand==1)
    {
        $profile_pic="img/a.jpg";
    }
    else if($rand==2)
    {
        $profile_pic="img/b.png";
    }
    else if($rand==3)
    {
        $profile_pic="img/c.png";
    }
    else if($rand==4)
    {
        $profile_pic="img/d.png";
    }
    else if($rand==5)
    {
        $profile_pic="img/e.jpg";
    }
	else
    {
        $profile_pic="img/f.jpg";
    }
    $insert="insert into users (user_name,user_pass,user_email,user_profile,user_country,user_gender) values('$name','$pass','$email','$profile_pic','$country','$gender')";
    if(mysqli_query($con,$insert))
    {
        echo"<script>alert('$name registered successsfully ');</script>";
        echo"<script>window.open('index.php','_self');</script>";
    }
    else{
        echo"<script>alert('$name registration failed ');</script>";
        echo"<script>window.open('signup.php','_self')</script>;";
    }

}
?>