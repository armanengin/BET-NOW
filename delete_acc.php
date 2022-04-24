<?php
 include('config.php');
 session_start();
 $username = $_SESSION['login_user'];
 $sql = "DELETE FROM person where username = '$username'";
 $result = $db->query($sql);

 header('location: logout.php');