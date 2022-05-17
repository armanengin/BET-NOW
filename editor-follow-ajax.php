<?php 
    include("config.php");
    session_start();
    $_SESSION["editor-profile-follow"] = $_POST['editor_follow_id'];    

    // Fetch Current User Id
    $username = $_SESSION['login_user'];
    $user_sql = "SELECT username, user_id FROM user WHERE username = '$username'";
    $user_sql = mysqli_query($db,$user_sql);
    $user_sql = $user_sql -> fetch_array(MYSQLI_ASSOC);
    
    // Fetch User_id and Editor_id
    $follow_sql = "SELECT user_id, editor_id FROM follows WHERE user_id = '{$user_sql['user_id']}' and editor_id = '{$_SESSION["editor-profile-follow"]}'";
    $follow_sql = mysqli_query($db,$follow_sql);
    $follow_row = mysqli_num_rows($follow_sql);

    // If editor is not followed
    if($follow_row == 0) {
        $follow_editor_sql = "INSERT INTO follows ( user_id, editor_id)  
                    VALUES ('{$user_sql['user_id']}', {$_SESSION["editor-profile-follow"]})";

        $follow_editor_sql = mysqli_query($db,$follow_editor_sql);
    }
    else{
        $unfollow_editor_sql = "DELETE FROM follows WHERE editor_id ='{$_SESSION["editor-profile-follow"]}' AND user_id = '{$user_sql['user_id']}'";
        $unfollow_editor_sql = mysqli_query($db,$unfollow_editor_sql);
    }
?>