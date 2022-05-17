<?php 
    include("config.php");
    session_start();
    $_SESSION["editor-performance"] = $_POST['editor_id']; 
?>