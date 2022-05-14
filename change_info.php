<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $username_session = $_SESSION['login_user'];
      $username = $_POST["username"]; 
      $password = $_POST["password"]; 
      $cpassword = $_POST["password-check"];
      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $identificationNum = $_POST["identification-num"];
      $birthdayDate = $_POST["birthdayDate"];
      $emailAddress = $_POST["emailAddress"];
      $phoneNumber = $_POST["phoneNumber"];
      
      if( $password === $cpassword){
        $sql = "UPDATE user SET username = '$username', first_name = '$firstName', last_name = '$lastName', identification_num = '$identificationNum', birthday = '$birthdayDate', email = '$emailAddress', phone_num = '$phoneNumber', password = '$password' WHERE username = '$username_session'";
        $result = mysqli_query($db,$sql);
        
              
              $_SESSION['login_user'] = $username;
              $_SESSION['login_pass'] = $password;
              $_SESSION['login_flag'] = true;
              header("location: profile.php");
        }
        else { 
            $showError = "Passwords do not match"; 
        }  
    }
    
?>