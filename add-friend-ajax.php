<?php 
    include("config.php");
    session_start();
    $_SESSION["friend"] = $_POST['friend_id']; 
    echo "<script type='text/javascript'>alert('{$_POST['friend_id']}');</script>"
?>