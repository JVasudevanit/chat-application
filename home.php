<?php
    session_start();
    include("connection.php");
    if($_SESSION['user_email']==NULL)
    {
        echo"
        <script>
            window.open('index.php','_self');
        </script>
        ";
    }
    define('SALT','897sdn9j98u98jk');
?>
<html>
    <head>
    <link rel="icon" type="image/jpg" href="cha.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <title>Chatit - Home page</title>
    </head>
    <body>
        <div class="container main-section">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar" >
                    <div class="input-group-btn">
                        <div class="input-group searchbox">
                            <center>
                                <a href="find_friends.php">
                                    <button class="btn btn-default search-icon" name="search_user" type="submit">Add new user</button>
                                </a>
                            </center>
                        </div>
                     </div>
                     <div class="left-chat">
                            <ul>
                                <?php
                                include("get_user_data.php");
                                ?>
                            </ul>
                     </div>
                </div>
            <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
                <div class="row">
                <!-- getting the user information who is logged in-->
                <?php
                    $user=$_SESSION['user_email'];
                    $get_user="select * from users where user_email='$user'";
                    $run_user=mysqli_query($con,$get_user);
                    $row=mysqli_fetch_array($run_user);
                    $user_id=$row['user_id'];
                    $user_name=$row['user_name'];
                ?>
                <!-- getting user data on which user click-->
                <?php
                    if($_GET['user_name']==NULL)
                    {
                        echo"
                        <script>
                            window.open('index.php','_self');
                        </script>
                        ";
                    }
                    if(isset($_GET['user_name']))
                    {
                        global $con;
                        $get_username=$_GET['user_name'];
                        $get_user="select * from users where user_name='$get_username'";
                        $run_user=mysqli_query($con,$get_user);
                        $row_user=mysqli_fetch_array($run_user);
                        $username=$row_user['user_name'];
                        $user_profile_imgage=$row_user['user_profile'];
                    }
                    $total_message="select msg_id,sender_username,receiver_username,AES_DECRYPT(msg_content,'".SALT."') AS msg_content,msg_status,msg_date from users_chat where (sender_username = '$user_name' AND receiver_username = '$username') OR (receiver_username='$user_name' AND sender_username='$username');";
                    $run_message=mysqli_query($con,$total_message);
                    $total=mysqli_num_rows($run_message);
                ?>
                <div class="col-md-12 right-header">
                    <div class="right-header-img">
                    <img src=<?php echo"$user_profile_imgage"; ?> alt="">
                    </div>
                    <div class="right-header-detail">
                    <form action="" method="post">
                        <p><?php echo"$username";?></p>
                        <span><?php echo"$total" ?>messages</span>&nbsp &nbsp
                        <button class="btn btn-danger" name="logout">
                         Logout
                        </button>
                    </form>
                    <?php
                        if(isset($_POST['logout']))
                        {
                            $update_msg=mysqli_query($con,"update users set log_in='Offline' where user_name='$user_name'");
                            ?>
                            <script>
                                window.open("logout.php",'_self');
                            </script>
                            <?php
                            exit();
                        }
                    ?>
                </div>
                </div>
            </div>
            <div class="row">
                <div id="scrolling_to_bottom" class="col-md-12 right-header-contentchat">
                        <?php
                            $update_msg=mysqli_query($con,"update users_chat set msg_status='read' where sender_username='$username' AND receiver_username='$user_name'");
                            $sel_msg="select msg_id,sender_username,receiver_username, AES_DECRYPT(msg_content,'".SALT."') AS msg_content,msg_status,msg_date from users_chat where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC;";
                            $run_msg=mysqli_query($con,$sel_msg);
                            while($row=mysqli_fetch_array($run_msg))
                            {
                                $sender_username=$row['sender_username'];
                                $receiver_username=$row['receiver_username'];
                                $msg_content=$row['msg_content'];
                                $msg_date=$row['msg_date'];
                                ?>
                                <ul>
                                <?php
                                if($user_name==$sender_username AND $username==$receiver_username)
                                {
                                    echo "
                                        <li>
                                        <div class='rightside-right-chat'><span>$username<small>$msg_date</small></span>
                                        </br></br>
                                        <p>$msg_content</p>
                                        </br></br>
                                        </div>
                                        </li>
                                    ";
                                }
                               else if($user_name==$receiver_username AND $username==$sender_username)
                                {
                                    echo "
                                        <li>
                                        <div class='rightside-left-chat'><span>$username<small>$msg_date</small></span>
                                        </br></br>
                                        <p>$msg_content</p>
                                        </br></br>
                                        </div>
                                        </li>
                                    ";
                                }
                                ?>
                                </ul>
                                <?php
                            }
                        ?>
                </div>
            </div>           
            <div class="row">
                <div class="col-md-12 right-chat-textbox" id="textbox">
                            <form action="" method="post">
                                <input autocomplete="off" type="text" name="msg_content" placeholder="Write your message here....">
                                <button class="btn" name="submit">
                                <i class="fa fa-telegram" aria-hidden="true"></i>                                
                                </button>
                            </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php
            if(isset($_POST['submit']))
            {
                $msg=htmlentities($_POST['msg_content']);
                if($msg=="")
                {
                    echo"
                    <div class='alert alert-danger'>
                        <strong>
                            <center>
                            message was unable to send
                            </center>
                        </strong>
                    </div>";
                }
                else if(strlen($msg)>100)
                {
                    echo"
                <div class='alert alert-danger'>
                    <strong>
                        <center>
                        message is too long. Use only 100 characters.
                        </center>
                    </strong>
                </div>";
                }
            else
            {
                    $insert="insert into users_chat(sender_username,receiver_username,msg_content,msg_status,msg_date) values ('$user_name','$username', AES_ENCRYPT('$msg','".SALT."'),'unread',NOW());";
                    $run_insert=mysqli_query($con,$insert);
                    echo"
                    <script>
                        window.open('home.php?user_name=$username','_self');
                    </script>
                    ";
            }
         }
            ?>
            <script>
                $('#scrolling_to_bottom').animate({
                scrollTop: $('#scrolling_to_bottom').get(0).
                scrollHeight},1000);
            </script>
            <script type="text/javascript">
                $(document).ready(function(){
                var height=$(window).height();
                $('.left-chat').css('height',(height - 92)+'px');
                $('.right-header-contentchat').css('height',(height - 163)+'px');
                });
            </script>
    </body>
</html>