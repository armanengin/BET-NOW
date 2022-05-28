<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include("config.php");
    session_start();
    $username = $_SESSION['login_user'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sql_for_user_id = "SELECT user_id, first_name, last_name, username, identification_num, birthday, email, phone_num, password FROM user WHERE username = '$username'";
        $user_id_query = mysqli_query($db, $sql_for_user_id);
        $user_id_assoc = mysqli_fetch_assoc($user_id_query);
        $user_id = $user_id_assoc['user_id'];
        echo $user_id;
        echo "<br>";
        $betslip_id = $_POST['betslip_id'];
        echo $betslip_id;
        echo "<br>";
        $comment = $_POST["comment_betslip"];
        echo $comment;
        echo "<br>";
        date_default_timezone_set('Europe/Istanbul');
        $comment_date = date('d-m-y');
        $comment_time = date('h:i:s');
        echo $comment_date;
        echo "<br>";
        echo $comment_time;
        $sql = "INSERT INTO comments_betslip (user_id, betslip_id, comment, comment_date, comment_time) VALUES ('$user_id', '$betslip_id', '$comment', '$comment_date', '$comment_time')";
        //$db->query($sql);
        $result = mysqli_query($db, $sql);
        if($result){
            echo "sucess";
        }
        else{
            echo "unsucessful";
        }
    }
    header("location:social.php");
?>