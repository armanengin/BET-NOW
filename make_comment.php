<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include("config.php");
    session_start();
    $username = $_SESSION['login_user'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql = "SELECT user_id, first_name, last_name, username, identification_num, birthday, email, phone_num, password FROM user WHERE username = '$username'";
        $betslip_id;
        $user_id = mysqli_query($db,$sql);
        $text_input = $_POST["comment_betslip"];
        $sql = "INSERT INTO comments_betslip(user_id, betslip_id, comment) VALUES ($user_id, $betslip_id, $comment)";
        mysqli_query($db, $sql);
    }
    ?>