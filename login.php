<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $_SESSION['login_flag'] = false;
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count_user = mysqli_num_rows($result);

      $sql = "SELECT username from admin where username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count_admin = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
        if($count_admin == 1) {
            $_SESSION['login_user'] = $myusername;
            $_SESSION['login_pass'] = $mypassword;
            $_SESSION['login_flag'] = true;
            $_SESSION['admin_id'] = true;
            header("location: live.php");
        }
        else if($count_user == 1){
            $_SESSION['login_user'] = $myusername;
            $_SESSION['login_pass'] = $mypassword;
            $_SESSION['login_flag'] = true;
            header("location: live.php");

        }
        else{
           $_SESSION['login_flag'] = false;
            $error = "Your Login Name or Password is invalid";
            echo '<script>alert("Your Login Name or Password is invalid")</script>';
            header("location: live.php");
      }
   }
?>