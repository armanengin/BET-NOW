<?php 
    include("config.php");
    session_start();
    $_SESSION["editor-profile"] = $_POST['editor_id']; 
?>