<?php 
    include("config.php");
    session_start();
    $_SESSION["editor-profile-follow"] = $_POST['editor_id']; 
?>