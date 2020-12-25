<?php
    session_start();
    include("find_friends_function.php");
    if(!isset($_SESSION['user_email']))
    {
        echo"
        <script>
            window.open('index.php','_self');
        </script>
        ";
    }
?>
<html>
    <head>
    <link rel="icon" type="image/jpg" href="cha.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/find_people.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <title>Chatit - find your frnds</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark" href="#">
        <a href="#" class="navbar-brand">
        <?php
            $user=$_SESSION['user_email'];
            $get_user="select * from users where user_email='$user'";
            $run_user=mysqli_query($con,$get_user);
            $row=mysqli_fetch_array($run_user);
            $user_name=$row['user_name'];
            echo"<a href='home.php?user_name=$user_name' class='heading'>Chat It</a>";

        ?>
        </a>
       <!-- <ul class="navbar-nav">
            <li><a href="account_settings.php" style="color:white;text-decoration:none;font-size:20px;">Setting</a></li>
        </ul>-->      
      </nav><br>
      <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <form action="" class="search-form">
                    <input type="text" name="search_query" placeholder="search friends here...." autocomplete="off" required>
                    <button class="btn" type="submit" name="search_btn">search
                    </button>
                </form>
            </div>
            <div class="col-sm-4">

            </div>
      </div><br><br>
      
      <?php
      search_user();
      ?>
    
    </body>
</html><?php ?>