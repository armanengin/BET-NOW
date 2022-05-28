<?php
    include('config.php');
    session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $bet_id = $_POST['change-odd'];
    $new_odd = (($_POST['input-new-odd']));
    $sql = "UPDATE bet SET odd_value = '$new_odd' WHERE bet_id = '$bet_id'";

    $query = mysqli_query($db, $sql);
   } 
   header('location: admin-index.php');
?>