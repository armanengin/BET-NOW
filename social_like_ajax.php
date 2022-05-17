<?php 
    ini_set('display_errors', 1);
    error_reporting(~0);
    include("config.php");
    session_start();
    $betslip_id = $_POST['betslip_id'];    

    // Fetch Current User Id
    $username = $_SESSION['login_user'];
    $sql = "SELECT user_id from user WHERE username = '$username'";
    $result = $db->query($sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $user_id = $row['user_id'];
    
    // Fetch User_id and Editor_id
    $sql_for_isLiked = "SELECT user_id FROM likes WHERE user_id = '$user_id' AND betslip_id = '$betslip_id'";
    $query_for_isLiked = mysqli_query($db, $sql_for_isLiked);
    $isLiked = mysqli_num_rows($query_for_isLiked);

    // If editor is not followed
    if($isLiked == 0) {
        echo "Betslip is liked";
        $sql_for_like_betslip = "INSERT INTO likes (betslip_id, user_id)  
                    VALUES ('$betslip_id', '$user_id')";

        mysqli_query($db, $sql_for_like_betslip);
    }
    else{
        echo "Betslip is unliked";
        $unlike_betslip_sql = "DELETE FROM likes WHERE betslip_id = '$betslip_id' AND user_id = '$user_id'";
        mysqli_query($db, $unlike_betslip_sql);
    }
?>